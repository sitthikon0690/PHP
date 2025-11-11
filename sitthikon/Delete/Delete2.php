<?php
$connect = mysqli_connect("localhost", "root","", "class");
$sql ='Delete from student where StudentID='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);
if($result){
    echo 'complete';
}
else{
    echo 'no complete';
}
mysqli_close($connect);
?>
