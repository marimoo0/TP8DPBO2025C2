<?php
require_once 'controllers/BaseController.php';
require_once 'models/Course.php';

class CourseController extends BaseController
{
    private $course;

    public function __construct()
    {
        $this->course = new Course();
    }


    public function index()
    {
        $result = $this->course->getAll();
        $this->render('courses/index', ['courses' => $result]);
    }

    public function create()
    {
        $this->render('courses/create');
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->course->code = $_POST['code'];
            $this->course->name = $_POST['name'];
            $this->course->credits = $_POST['credits'];

            if ($this->course->create()) {
                $this->redirect('index.php?controller=course&action=index');
            } else {
                $this->render('courses/create', ['error' => 'Unable to create course.']);
            }
        }
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=course&action=index');
        }

        $id = $_GET['id'];
        $course = $this->course->getById($id);

        if (!$course) {
            $this->redirect('index.php?controller=course&action=index');
        }

        $this->render('courses/edit', ['course' => $course]);
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->course->id = $_POST['id'];
            $this->course->code = $_POST['code'];
            $this->course->name = $_POST['name'];
            $this->course->credits = $_POST['credits'];

            if ($this->course->update()) {
                $this->redirect('index.php?controller=course&action=index');
            } else {
                $this->render('courses/edit', [
                    'course' => $_POST,
                    'error' => 'Unable to update course.'
                ]);
            }
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->course->id = $_GET['id'];

            if ($this->course->delete()) {
                $this->redirect('index.php?controller=course&action=index');
            } else {
                $this->redirect('index.php?controller=course&action=index&error=delete_failed');
            }
        } else {
            $this->redirect('index.php?controller=course&action=index');
        }
    }
}