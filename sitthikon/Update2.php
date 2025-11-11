<?php
    $connect = mysqli_connect("localhost", "root","", "hotel");
    $sql ='select * from hotel where Room_id = "'.$_POST['id'].'" ';
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result)
?>
<form method='post' action= "Update3.php">
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
    RoomID:<input type="text" name="Room_id" value = "<?php echo $row['Room_id'];?>" disabled></br>
    Floors:<input type="text" name="Floors" value = "<?php echo $row['Floors'];?>"></br>
    Price:<input type="text" name="Price" value = "<?php echo $row['Price'];?>"></br>
    Single/Double:<input type="text" name="SD" value = "<?php echo $row['SD'];?>"></br>
    Room Type:<input type="text" name="Room_Type" value = "<?php echo $row['Room_Type'];?>"></br>
<input type="submit" value="Update">
    
</form>