<?php


class Student_loader extends Db_loader
{
    private array $students;

    /**
     * Student_loader constructor.
     * @param array $students
     */
    public function __construct()
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT * FROM Students');
        $statement->execute();
        $this->students = $statement->fetchAll();
    }
    public function getStudents() : array {
        return $this->students;
    }
    public function getClassId(string $className){
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT Id FROM Class WHERE Name = :name');
        $statement->bindValue('name', $className);
        $statement->execute();
        $result = $statement->fetch();
        if($result){
            return $result['Id'];
        } else {
            return null;
        }

    }

    public function getSpecificStudent(string $id)
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT * FROM Students WHERE Id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch();
    }

    public function getClassName(string $classId)
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT Name FROM Class WHERE Id = :id');
        $statement->bindValue('id', $classId);
        $statement->execute();
        return $statement->fetch();
    }
    public function getTeacherId(string $classId){

    }
    public function updateStudent(int $id){

    }
    public function insertStudent(string $name, string $email, string $class){
        $id = $this->getClassId($class);
        if(!$id){
            return "Class {$class} does not exist, create class first!";
        }
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('INSERT INTO Students (Name, Email, Class_id) VALUES (:name, :email, :id)');
        $statement->bindValue('name', $name);
        $statement->bindValue('email', $email);
        $statement->bindValue('id', $id);
        $statement->execute();
    }
    public function deleteStudent(int $id){
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('DELETE FROM students WHERE id = :id');
        $statement->bindValue('id', $id);
    }
}