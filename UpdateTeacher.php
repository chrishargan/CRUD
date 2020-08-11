<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Update Teacher</title>
</head>
<body>
<form method="post">
    <button type="submit" class="btn btn-primary" name="HomeButton">Home</button>
    <div class="form-group">
        <label for="formGroupExampleInput">Old Teacher Name</label>
        <input type="text" class="form-control" name="TeacherUpdateName" placeholder="Old Teacher name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">New Teacher name</label>
        <input type="text" class="form-control" name="TeacherUpdateName2" placeholder="New Teacher name">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="updateNamebtn">Update</button>
    </div>
    <?php
        if (isset($_POST['updateNamebtn'])){
            if (!empty($_POST['TeacherUpdateName'] && $_POST['TeacherUpdateName'])){
                $update1 = $_POST['TeacherUpdateName'];
                $update2 = $_POST['TeacherUpdateName2'];
                $newobj = new Teacher();
                $newobj->updateTeacherName($update1, $update2);
            }else{
                echo ('<div class="alert alert-danger" role="alert">
                       <strong>Oh snap!</strong> All fields need to be filled in
                       </div>');
            }
        }
    ?>

</form>
<form method="post">

    <div class="form-group">
        <label for="formGroupExampleInput">Old Teacher Email</label>
        <input type="text" class="form-control" name="TeacherUpdateEmail" placeholder="example@example.com">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">New Teacher email</label>
        <input type="text" class="form-control" name="TeacherUpdateEmail" placeholder="example@example.com">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="updateEmailbtn">Update</button>
    </div>
    <?php
    if (isset($_POST['updateEmailbtn'])){
        if (!empty($_POST['TeacherUpdateEmail'] && $_POST['TeacherUpdateEmail'])){
            $update1 = $_POST['TeacherUpdateEmail'];
            $update2 = $_POST['TeacherUpdateEmail2'];
            $newobj = new Teacher();
            $newobj->updateTeacherEmail($update1, $update2);
        }else{
            echo ('<div class="alert alert-danger" role="alert">
                       <strong>Oh snap!</strong> All fields need to be filled in
                       </div>');
        }
    }
    ?>
</form>
</body>
</html>
