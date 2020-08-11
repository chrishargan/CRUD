<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Create new teacher</title>
</head>
<body>
<form method="post" name="newteacher">
    <button type="submit" class="btn btn-primary" name="HomeBtn">Home</button>
    <h3>Create Teacher</h3>
    <div class="form-group">
        <label for="formGroupExampleInput">Teacher Name</label>
        <input type="text" class="form-control" name="TeacherName" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Teacher Email</label>
        <input type="text" class="form-control" name="TeacherEmail" placeholder="example@example.com">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="MakeTeacher">Create</button>
        <?php
            if (isset($_POST['MakeTeacher'])){
                if (!empty($_POST['TeacherName'] && $_POST['TeacherEmail'])){
                    $name = $_POST['TeacherNameDelete'];
                    $email = $_POST['TeacherEmailDelete'];
                    $newObj = new Teacher($name, $email);
                    $newObj->setTeacher($name, $email);
                }else{
                    echo ('<div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> All fields need to be filled in
                           </div>');
                }
            }
        ?>

    </div>


</form>

<form method="post" name="newteacher">
    <h3>Delete Teacher</h3>
    <div class="form-group">
        <label for="formGroupExampleInput">Teacher Name</label>
        <input type="text" class="form-control" name="TeacherNameDelete" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Teacher Email</label>
        <input type="text" class="form-control" name="TeacherEmailDelete" placeholder="example@example.com">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="TeacherDelete">Delete</button>
        <?php
        if (isset($_POST['TeacherDelete'])){
            if (!empty($_POST['TeacherNameDelete'] && $_POST['TeacherEmailDelete'])){
                $name = $_POST['TeacherNameDelete'];
                $email = $_POST['TeacherEmailDelete'];
                $newObj = new Teacher($name, $email);
                $newObj->deleteTeacherName($name);
                $newObj->deleteTeacherEmail($email);
            }else{
                echo ('<div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> All fields need to be filled in
                           </div>');
            }
        }
        ?>

    </div>
</form>
</body>
</html>


