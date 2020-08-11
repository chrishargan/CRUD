<?php


class Class_loader extends Db_loader
{
    public function fetchClasses() {
        $pdo = $this->openConnection();
        $statement= $pdo->prepare('SELECT * FROM Class');
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getSpecificClass(string $id){
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT * FROM Class WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch();
    }

    public function getTeacherName(string $id)
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT Name FROM Teachers WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch();
    }

    /*public function getClassName(string $className): string
    {
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('select (Name,) from Class');
        $statement->execute();
    }*/

    public function insertClass($className, $location, $teacher){
        $teacherId = $this->getTeacherId($teacher);
        /*if(!$teacherId){
            if the teacher doesnt exist yet, new pdo to insert the teacher
        }*/
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('INSERT INTO Class (Name, Location, Teacher_id) VALUES (:name, :location, :teacher_id)');
        $statement->bindValue('name', $className);
        $statement->bindValue('location', $location);
        $statement->bindValue('teacher_id', $teacherId);
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
    public function getTeacherId(string $name){
        $pdo = $this->openConnection();
        $statement = $pdo->prepare('SELECT Id FROM Teachers WHERE Name = :name');
        $statement->bindValue('name', $name);
        $statement->execute();
        $result = $statement->fetch();
        if($result){
            return $result['Id'];;
        }

        return null;
    }
    public function fetchTeachers($teacherId) {

        $pdo = $this->openConnection();
        $statement = $pdo->prepare( 'select name from Teachers where Id = :id ');
        $statement->bindValue("id", $teacherId) ;
        $statement->execute();
        $this->teachers= $statement->fetchAll();

    }
}