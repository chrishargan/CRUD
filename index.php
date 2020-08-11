<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
define("DB_HOST","localhost");
define("DB_USER","becode");
define("DB_PASS","Skeeterpup61!");

require 'Controller/Classgroup_Controller.php';
require 'View/includes/header.php';
require 'Model/Db_loader.php';
require 'Model/ClassGroup.php';

//require 'View/homepage.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <title>Who's at BeCode</title>
    </head>
    <body>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Class</label>
            <input type="text" class="form-control" name="className"  id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Campus</label>
            <input type="text" class="form-control" name="location"  id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Teacher</label>
            <input type="text" class="form-control" name="teacherName"  id="exampleFormControlInput1" placeholder="">
        </div>
        <input class="btn btn-primary" type="submit" value="Add">
        <input class="btn btn-primary" type="submit" value="View">
        <input class="btn btn-primary" type="submit" value="Edit">
        <input class="btn btn-primary" type="submit" value="Delete">






    <pre>
    <?php
        $control = new ClassGroup_controller();
        $control->render($_GET, $_POST);


        if (isset($_POST['Add'])){
            if (!empty($_POST['className'])) {
                $className = $_POST['className'];
                $newClass = new ClassGroup();
                $newClass->setName($className);
            }
        }

        $test = new ClassGroup();
        var_dump($test);


    ?>
</pre>


<hr>
    </body>
    </html>






<?php
require 'View/includes/footer.php';
?>