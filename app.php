<?php

use controllers\MarkController;
use controllers\StudentController;
use controllers\SubjectkController;

include 'models/Student.php';
include 'models/Subject.php';
include 'models/Mark.php';
include 'controllers/StudentController.php';
include 'controllers/SubjectController.php';
include 'controllers/MarkController.php';
include 'views/View.php';
include 'models/Database.php';


$db = new Database();

$studentController = new StudentController($db);


$view = new View();

$students = $studentController->getAllStudents();
$view->displayStudents($students);
