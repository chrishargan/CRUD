<?php


class UpdateClassController
{
    public function render(array $GET, array $POST): void
    {
        $message = "Add new class";
        require 'View/includes/header.php';
        echo "work in progress";

        if(isset($POST['addingClass'])){
            if(isset($POST['className']) && isset($POST['classLocation']) && isset($POST['classTeacher'])){
                $message = "Successfully added {$POST['className']}";
                $this->addRecord($POST['className'], $POST['classLocation'], $POST['classTeacher']);
            } elseif (!isset($POST['new_class']) && (empty($POST['className']) || empty($POST['classLocation']) || empty($POST['classTeacher']))){
                $message = "Fill in all fields!";
            }
        }

        require 'View/add_class.php';
        require 'View/includes/footer.php';
    }
    public function addRecord($name, $location, $teacher): void
    {
        $classList = new Class_loader();
        $classList->insertClass($name, $location, $teacher);
    }
}