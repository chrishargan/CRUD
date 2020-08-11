<?php require 'includes/header.php'; ?>
<a href="index.php">Back to Homepage</a>
<br>
<form action="index.php" method="POST">
    <input type="submit" value="Add new student" name="new_student">
</form>
<table>
    <tr>
        <th>Student</th>
        <th>Email</th>
        <th>Details</th>
    </tr>
    <?php
    foreach ($students as $student){
        echo "<tr>";
        echo "<td>{$student['Name']}</td>";
        echo "<td>{$student['Email']}</td>";
        echo "<td><form action='index.php' method='POST'><input type='hidden' name='studentId' value='{$student['Id']}'?><input type='submit' value='View'></form></td>";
        //echo "<td>{$student['Class']}</td>";
        echo "</tr>";
        echo "<tr><td>{$student['Id']}</td></tr>";
    }
    ?>
</table>
<?php include 'includes/footer.php'; ?>