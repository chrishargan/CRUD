<?php

class ClassGroup extends Db_loader
{
//private int $id;
private string $className;
private string $location;
private string $teacher;
private array $teachers;
private array $classes;



    public function __construct()
    {


        /*$this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->teachers = $teachers;
        $this->classes
    */
    }

    public function fetchClasses() {
        $pdo = $this->openConnection();
        $statement= $pdo->prepare('SELECT * FROM Class');
        $statement->execute();
        return $statement->fetchAll();
    }


    public function getClassName(string $className): string
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('select (Name,) from Class');
        $statement->execute();
    }


    public function setName(string $className): void
    {
        $pdo = $this->openConnection();
        $name = $_POST['className'];
        $location = $_POST['location'];
        $teacher = $_POST['teacherName'];
        $statement= $pdo->prepare("select Id FROM Teacher where Name=:name");
        $statement->bindValue('name', $teacher);
        $statement->execute();
        $result = $statement->fetch();
        $teacherId = $result["Id"];



        $pdo= $this->openConnection();
        $statement = $pdo->prepare('INSERT INTO Class (Name, Location, Teacher_id) VALUES (:Name, :Location)');


    }

    public function fetchTeachers($teacherId) {

        $pdo = $this->openConnection();
        $statement = $pdo->prepare( 'select name from Teachers where Id = :id ');
        $statement->bindValue("id", $teacherId) ;
        $statement->execute();
        $this->teachers= $statement->fetchAll();

    }



    public function getLocation(): string
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('select (Location,) from Class');
        $statement->execute();

    }


    public function setLocation(string $location): void
    {
        $this->location = $location;
    }


    public function getTeacher(): string
    {
        return $this->teacher;
    }


    public function setTeacher(string $teacher): void
    {

    }


}