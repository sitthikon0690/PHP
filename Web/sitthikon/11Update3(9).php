<?php
    $connect = mysqli_connect("localhost", "root", "", "hotel");
    $sql = "update hotel set Floors = '".$_POST['Floors']."', Price = '".$_POST['Price']."', SD = '".$_POST['SD']."', Room_Type = '".$_POST['SD']."' WHERE Room_id = '".$_POST['id']."'";
    mysqli_query($connect, $sql);
    echo "<font color='red'>Congratulations! The record is updated.</font>";
?>