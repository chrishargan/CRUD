<?php include 'includes/footer.php'; ?>
<a href="index.php">Back to Homepage</a>
<br>
<table>
    <tr>
        <th>Class Name</th>
        <th>Location</th>
        <th>Teacher</th>
    </tr>
    <tr>
        <td><?php echo $class['Name']; ?></td>
        <td><?php echo $class['Location']; ?></td>
        <td><?php echo $teacher['Name']; ?></td>
    </tr>
</table>
