
<?php
    $connect = mysqli_connect("localhost", "root","", "class2");
    $sql =
    '   DELETE
        FROM student
        where StudentID = 1111111';
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
?>