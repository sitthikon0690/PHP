<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql =
    '   ALTER TABLE student
	    ADD PRIMARY KEY(StudentID)';
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
?>