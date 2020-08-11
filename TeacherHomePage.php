<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <button type="submit" class="btn btn-primary" name="CreatePage">Create Teacher</button>
    <button type="submit" class="btn btn-primary" name="UpdatePage">Update Teacher</button>
</form>


<form method="post">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Teacher Name</th>
            <th>Teacher Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php $showTeacher = new Teacher();
            $allteacher = $showTeacher->getTeacher();
            foreach ($allteacher as $teacher => $value){
                echo "<td>{$value['Name']} </td>";
                echo "<td>{$value['Email']} </td>";
                echo "<tr></tr>";
            }?>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>
