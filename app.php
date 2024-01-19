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
$markController = new MarkController($db);



$view = new View();
//Step 1: Từ client -> controller




$students = $studentController->getAllStudents();
$view->displayStudents($students);

$marks = $markController->getAllMarks();
$view->displayStudents($marks);
