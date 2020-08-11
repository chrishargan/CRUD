<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <form action="index.php" method="POST">
        <input type="submit" value="students" name="students">
        <input type="submit" value="teachers" name="teachers">
        <input type="submit" value="classes" name="classes">
    </form>
</section>
<?php require 'includes/footer.php'?>