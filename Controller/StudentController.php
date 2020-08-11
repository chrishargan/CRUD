<?php

class StudentController {
    public function render(array $GET, array $POST)
    {
        if(!isset($POST['studentId'])){
            $studentList = new Student_loader();
            $students = $studentList->getStudents();
            require 'View/student.php';
        } else {
            $studentInfo = new Student_loader();
            $student = $studentInfo->getSpecificStudent($POST['studentId']);
            $class = $studentInfo->getClassName($student['Class_id']);
            require 'View/student_details.php';
        }

    }
}