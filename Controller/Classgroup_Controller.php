<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Classgroup_Controller {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
     $classGroup = new ClassGroup();
     $classes = $classGroup->fetchClasses();


        require 'View/homepage.php';
    }

}