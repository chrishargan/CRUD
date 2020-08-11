<?php

require 'includes/header.php';
?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <form action="index.php" method="POST">
        <input type="submit" value="students" name="students">
        <input type="submit" value="teachers" name="teachers">
        <input type="submit" value="classes" name="classes">
    </form>
<!--    <form>
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

    </form>-->
   <!-- <table>
        <tr><th>Class Name</th><th>Location</th> </tr>
        <?php
/*        foreach($classes as $class=>$value) {
            echo "<td>{$value['Name']}</td>";
            echo "<td>{$value['Location']}</td>";
        }
        */?>
    </table>-->
</section>
<?php require 'includes/footer.php' ?>