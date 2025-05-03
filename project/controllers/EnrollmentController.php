<?php
require_once 'controllers/BaseController.php';
require_once 'models/Enrollment.php';
require_once 'models/Student.php';
require_once 'models/Course.php';

class EnrollmentController extends BaseController
{
    private $enrollment;
    private $student;
    private $course;

    public function __construct()
    {
        $this->enrollment = new Enrollment();
        $this->student = new Student();
        $this->course = new Course();
    }

    public function index()
    {
        $result = $this->enrollment->getAll();
        $this->render('enrollments/index', ['enrollments' => $result]);
    }

    public function create()
    {
        $students = $this->student->getAll();
        $courses = $this->course->getAll();
        $this->render('enrollments/create', [
            'students' => $students,
            'courses' => $courses
        ]);
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->enrollment->student_id = $_POST['student_id'];
            $this->enrollment->course_id = $_POST['course_id'];
            $this->enrollment->semester = $_POST['semester'];
            $this->enrollment->grade = $_POST['grade'];

            if ($this->enrollment->create()) {
                $this->redirect('index.php?controller=enrollment&action=index');
            } else {
                $students = $this->student->getAll();
                $courses = $this->course->getAll();
                $this->render('enrollments/create', [
                    'students' => $students,
                    'courses' => $courses,
                    'error' => 'Unable to create enrollment.'
                ]);
            }
        }
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=enrollment&action=index');
        }

        $id = $_GET['id'];
        $enrollment = $this->enrollment->getById($id);

        if (!$enrollment) {
            $this->redirect('index.php?controller=enrollment&action=index');
        }

        $students = $this->student->getAll();
        $courses = $this->course->getAll();

        $this->render('enrollments/edit', [
            'enrollment' => $enrollment,
            'students' => $students,
            'courses' => $courses
        ]);
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->enrollment->id = $_POST['id'];
            $this->enrollment->student_id = $_POST['student_id'];
            $this->enrollment->course_id = $_POST['course_id'];
            $this->enrollment->semester = $_POST['semester'];
            $this->enrollment->grade = $_POST['grade'];

            if ($this->enrollment->update()) {
                $this->redirect('index.php?controller=enrollment&action=index');
            } else {
                $students = $this->student->getAll();
                $courses = $this->course->getAll();
                $this->render('enrollments/edit', [
                    'enrollment' => $_POST,
                    'students' => $students,
                    'courses' => $courses,
                    'error' => 'Unable to update enrollment.'
                ]);
            }
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->enrollment->id = $_GET['id'];

            if ($this->enrollment->delete()) {
                $this->redirect('index.php?controller=enrollment&action=index');
            } else {
                $this->redirect('index.php?controller=enrollment&action=index&error=delete_failed');
            }
        } else {
            $this->redirect('index.php?controller=enrollment&action=index');
        }
    }
}