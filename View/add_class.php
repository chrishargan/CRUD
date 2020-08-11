<a href="index.php">Back to Homepage</a>
<br>
<h3><?php echo $message; ?></h3>
<form action="index.php" method="POST">
    <label for="className">Name Class</label><input type="text" name="className"><br>
    <label for="classLocation">Location</label><input type="text" name="classLocation"><br>
    <label for="classTeacher">Name teacher</label><input type="text" name="classTeacher"><br>
    <input name="addingClass" type="submit" value="Add new class">
</form>
