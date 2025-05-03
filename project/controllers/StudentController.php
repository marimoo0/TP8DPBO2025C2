<?php
require_once 'controllers/BaseController.php';
require_once 'models/Student.php';

class StudentController extends BaseController
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $result = $this->student->getAll();
        $this->render('students/index', ['students' => $result]);
    }

    public function create()
    {
        $this->render('students/create');
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->student->name = $_POST['name'];
            $this->student->nim = $_POST['nim'];
            $this->student->phone = $_POST['phone'];
            $this->student->join_date = $_POST['join_date'];

            if ($this->student->create()) {
                $this->redirect('index.php?controller=student&action=index');
            } else {
                $this->render('students/create', ['error' => 'Unable to create student.']);
            }
        }
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=student&action=index');
        }

        $id = $_GET['id'];
        $student = $this->student->getById($id);

        if (!$student) {
            $this->redirect('index.php?controller=student&action=index');
        }

        $this->render('students/edit', ['student' => $student]);
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->student->id = $_POST['id'];
            $this->student->name = $_POST['name'];
            $this->student->nim = $_POST['nim'];
            $this->student->phone = $_POST['phone'];
            $this->student->join_date = $_POST['join_date'];

            if ($this->student->update()) {
                $this->redirect('index.php?controller=student&action=index');
            } else {
                $this->render('students/edit', [
                    'student' => $_POST,
                    'error' => 'Unable to update student.'
                ]);
            }
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->student->id = $_GET['id'];

            if ($this->student->delete()) {
                $this->redirect('index.php?controller=student&action=index');
            } else {
                $this->redirect('index.php?controller=student&action=index&error=delete_failed');
            }
        } else {
            $this->redirect('index.php?controller=student&action=index');
        }
    }
}