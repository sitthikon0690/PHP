<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql ='select TeacherID,TFirstname,TLastname, RoomNo from teacher where TeacherID = 103';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        echo '<table border="1" cellpading="0" cellspacing="0" >';
        echo '<tr>';
            echo '<td>';
                echo 'TeacherID';
            echo '</td>';
            echo '<td>';
                echo 'TFirstname';
            echo '</td>';
            echo '<td>';
                echo 'TLastname';
            echo '</td>';
            echo '<td>';
                echo 'RoomNo';
            echo '</td>';
        echo '</tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
                echo '<td>'.$row['TeacherID'].'</td>';
                echo '<td>'.$row['TFirstname'].'</td>';
                echo '<td>'.$row['TLastname'].'</td>';
                echo '<td>'.$row['RoomNo'].'</td>';
            echo '</tr>';
        }
    }
    mysqli_close($connect); 
?>