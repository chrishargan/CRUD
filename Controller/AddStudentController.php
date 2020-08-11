<?php


class AddStudentController
{
    public function render(array $GET, array $POST)
    {
        $message = "Add new student";
        require 'View/includes/header.php';
        echo "work in progress";

        if(isset($POST['addingStudent'])){
            if(isset($POST['studentName']) && isset($POST['studentEmail']) && isset($POST['studentClass'])){
                $message = "Successfully added {$POST['studentName']}";
                $this->addRecord($POST['studentName'], $POST['studentEmail'], $POST['studentClass']);
            } elseif (!isset($POST['new_student']) && (empty($POST['studentName']) || empty($POST['studentEmail']) || empty($POST['studentClass']))){
                $message = "Fill in all fields!";
            }
        }

        require 'View/add_student.php';
        require 'View/includes/footer.php';
    }
    public function addRecord($name, $email, $class): void
    {
        $studentList = new Student_loader();
        $studentList->insertStudent($name, $email, $class);
    }
}