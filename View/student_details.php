<?php include 'includes/footer.php'; ?>
<a href="index.php">Back to Homepage</a>
<br>
<table>
    <tr>
        <th>Student Name</th>
        <th>Email</th>
        <th>Class</th>
    </tr>
    <tr>
        <td><?php echo $student['Name']; ?></td>
        <td><?php echo $student['Email']; ?></td>
        <td><?php echo $class['Name']; ?></td>
    </tr>
</table>