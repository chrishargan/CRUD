<a href="index.php">Back to Homepage</a>
<br>
<h3><?php echo $message; ?></h3>
<form action="index.php" method="POST">
    <label for="studentName">Name Student</label><input type="text" name="studentName"><br>
    <label for="studentEmail">Email Student</label><input type="text" name="studentEmail"><br>
    <label for="studentClass">Class Student</label><input type="text" name="studentClass"><br>
    <input name="addingStudent" type="submit" value="Add new student">
</form>

