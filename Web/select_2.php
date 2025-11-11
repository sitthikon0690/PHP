<?php
$connect = mysqli_connect("localhost", "root", "", "class");
$sql = 'select * from teacher where TeacherID = 103';
$result = mysqli_query($connect, $sql);

if (!$result) {
    die('Cannot access database!');
} else {
    echo '<table border="1" cellpadding="0" cellspacing="0">';
    echo '<tr>';
    echo '<td>TeacherID</td>';
    echo '<td>Firstname</td>';
    echo '<td>Lastname</td>';
    echo '<td>RoomNumber</td>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        foreach ($row as $key => $value) {
            if($value==''){
                echo '<td>'.'&nbsp;'.'</td>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }
    }
    echo '</table>';
}

mysqli_close($connect);
?>