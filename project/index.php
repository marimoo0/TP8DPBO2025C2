<?php
require_once 'controllers/StudentController.php';
require_once 'controllers/CourseController.php';
require_once 'controllers/EnrollmentController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'student';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
  case 'student':
    $controller = new StudentController();
    break;
  case 'course':
    $controller = new CourseController();
    break;
  case 'enrollment':
    $controller = new EnrollmentController();
    break;
  default:
    $controller = new StudentController();
}

if (method_exists($controller, $action)) {
  $controller->$action();
} else {
  $controller->index();
}