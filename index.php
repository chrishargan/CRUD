<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// only uncomment for local database password differing from standard becode one
/*
define("DB_HOST","localhost");
define("DB_USER","becode");
define("DB_PASS","Skeeterpup61!");*/

require 'Controller/Classgroup_Controller.php';
require 'View/includes/header.php';
require 'Model/Db_loader.php';
require 'Model/ClassGroup.php';


?>

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









<?php
require 'View/includes/footer.php';
?>