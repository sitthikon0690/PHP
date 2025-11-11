<?php
$connect = mysqli_connect("localhost", "root", "", "class");
$sql = 'select * from student where StudentID = "4011905"';
$result = mysqli_query($connect, $sql);

if (!$result) {
    die('Cannot access database!');
} else {
    echo '<table border="1" cellpadding="0" cellspacing="0">';
    echo '<tr>';
    echo '<td>StudentID</td>';
    echo '<td>Firstname</td>';
    echo '<td>Lastname</td>';
    echo '<td>Major</td>';
    echo '<td>TeacherID</td>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['StudentID'] . '</td>';
        echo '<td>' . $row['SFirstname'] . '</td>';
        echo '<td>' . $row['SLastname'] . '</td>';
        echo '<td>' . $row['Major'] . '</td>';
        echo '<td>' . $row['TeacherID'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

mysqli_close($connect);
?>