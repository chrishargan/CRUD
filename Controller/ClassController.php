<?php


class ClassController
{
    public function render(array $GET, array $POST)
    {
        if(!isset($POST['classId'])){
            $classGroup = new Class_loader();
            $classes = $classGroup->fetchClasses();


            require 'View/class.php';
        } else {
            $classInfo = new Class_loader();
            $class = $classInfo->getSpecificClass($POST['classId']);
            $teacher = $classInfo->getTeacherName($class['Teacher_id']);
            require 'View/class_details.php';
        }
    }
}