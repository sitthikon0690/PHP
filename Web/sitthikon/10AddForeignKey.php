<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql =
    '   ALTER TABLE student
	    ADD FOREIGN KEY (TeacherID) REFERENCES teacher (TeacherID)';
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
?>