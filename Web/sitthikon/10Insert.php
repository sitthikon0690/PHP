<?php
    $connect = mysqli_connect("localhost", "root","", "class");
    $sql ='INSERT INTO student VALUES("5100000","xx","yy","zz","mm","102")';
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
?>