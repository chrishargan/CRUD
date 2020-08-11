<?php
declare(strict_types=1);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require 'secret.php';
require 'Model/Db_loader.php';
require 'Model/Student_loader.php';
require 'Model/Class_loader.php';
require 'Model/Teacher_loader.php';

require 'Controller/StudentController.php';
require 'Controller/HomepageController.php';
require 'Controller/AddStudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/ClassController.php';
require 'Controller/UpdateClassController.php';

//if(!isset($_POST['students']) && !isset($_POST['teachers']) && !isset($_POST['classes']) && !isset($_POST['new_student'])){
if(count($_POST) === 0){
    $controller = new HomepageController();
    $controller->render($_GET, $_POST);
} else {
    if(isset($_POST['students'])){
        $controller = new StudentController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['teachers'])){
        $controller = new TeacherController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['classes'])){
        $controller = new ClassController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['new_student']) || isset($_POST['addingStudent'])){
        $controller = new AddStudentController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['new_class']) || isset($_POST['addingClass'])){
        $controller = new UpdateClassController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['classId'])){
        $controller = new ClassController();
        $controller->render($_GET, $_POST);
    }
    if(isset($_POST['studentId'])){
        $controller = new StudentController();
        $controller->render($_GET, $_POST);
    }
}

