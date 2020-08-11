<?php require 'includes/header.php'; ?>
<a href="index.php">Back to Homepage</a>
<br>
<form action="index.php" method="POST">
    <input type="submit" value="Add new class" name="new_class">
</form>
<table>
    <tr>
        <th>Class Name</th>
        <th>Location</th>
        <th>Details</th>
    </tr>
    <?php
    foreach ($classes as $class){
        echo "<tr>";
        echo "<td>{$class['Name']}</td>";
        echo "<td>{$class['Location']}</td>";
        echo "<td><form action='index.php' method='POST'><input type='hidden' name='classId' value='{$class['Id']}'?><input type='submit' value='View'></form></td>";
        echo "</tr>";
    }
    ?>
</table>
<?php include 'includes/footer.php'; ?>