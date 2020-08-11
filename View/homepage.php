<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'includes/header.php';
?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h4>Hello <?php ?>,</h4>

    <p><a href="View/in?page=info">To info page</a></p>

    <p>Put your content here.</p>
</section>
<?php require 'includes/footer.php'?>