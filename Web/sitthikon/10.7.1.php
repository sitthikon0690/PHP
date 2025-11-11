<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql ='select * from Teacher';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {      
            echo '<form method="post" action="10.7.2.php" enctype="multipart/form-data">';
                echo 'Student ID<input type="text" name="std" size="20"><br>';
                echo 'Firstname<input type="text" name="fs" size="20"><br>';      
                echo 'Lirstname<input type="text" name="ls" size="20"><br>';
                echo 'Address</Address> <input type="text" name="ad" size="20"><br>';
                echo 'Major</Address> <input type="text" name="mj" size="20"><br>';
                echo '<label for="ttd">Plead Teacher ID :</label>';
                echo '<select name="ttd">';
                while ($row = mysqli_fetch_assoc($result)) {     
                    echo '<option value="'.$row['TeacherID'].'">'.$row['TeacherID'].'</option>';
                }
                echo '</select>';
            echo '<input type="submit" value="Insert">';          
    }
    mysqli_close($connect); 
?>