<?php


class Teacher extends Db_loader
{


    /*public function __construct($name, $email, $update1, $update2)
    {
        $this->setTeacher($name, $email);
        $this->updateTeacherName($update1, $update2);
        $this->updateTeacherEmail($update1, $update2);
    }*/

    public function getTeacher()
    {
        $pdo = $this->openConnection();
        $stmt = $pdo->prepare('select Name, Email from Teachers');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function setTeacher($name, $email)
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('INSERT INTO Teachers (name, email) VALUES (:name, :email)');
        $statement->bindValue('name', $name);
        $statement->bindValue('email', $email);
        $statement->execute();
    }

    public function updateTeacherName($update1, $update2)
    {
        $pdo = $this->openConnection();
        $stmt = $pdo->prepare('update Teachers set Name=:update2 where name=:update1');
        $stmt->bindValue('update1', $update1);
        $stmt->bindValue('update2', $update2);
        $stmt->execute();
    }

    public function updateTeacherEmail($update1, $update2)
    {
        $pdo = $this->openConnection();
        $stmt = $pdo->prepare('update Teachers set Name=:update2 where name= :update1');
        $stmt->bindValue('update1', $update1);
        $stmt->bindValue('update2', $update2);
        $stmt->execute();
    }

    public function deleteTeacherName($name)
    {
        $pdo = $this->openConnection();
        $stmt = $pdo->prepare('delete from Teachers where name = :name');
        $stmt->bindValue('name', $name);
        $stmt->execute();
    }
    public function deleteTeacherEmail($email)
    {
        $pdo = $this->openConnection();
        $stmt = $pdo->prepare('delete from Teachers where email = :email');
        $stmt->bindValue('email', $email);
        $stmt->execute();
    }


}