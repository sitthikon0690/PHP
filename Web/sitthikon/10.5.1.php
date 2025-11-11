<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql ='select * from student ';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {      
            echo '<form method="post" action="10.5.2.php" enctype="multipart/form-data">';
            echo '<label for="Sstd">Plead SelectStuden ID : </label>';
            echo '<select name="std">';
                while ($row = mysqli_fetch_assoc($result)) {     
                    echo '<option value="'.$row['StudentID'].'">'.$row['StudentID'].'</option>';
                }
            echo '<option value="All">All</option>';
            echo '</select>';
            echo '<br><input type="submit" value="Submit">';
    }
    mysqli_close($connect); 
?>