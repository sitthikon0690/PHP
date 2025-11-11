<html>
<?php
$connect = mysqli_connect("localhost", "root","", "hotel");
$sql ="select * from hotel where Room_id = '".$_POST['id']."' ";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $roomid = $row['Room_id'];
    $floor = $row['Floors'];
    $price = $row['Price'];
    $bedtype = $row['SD'];
    $roomtype = $row['Room_Type'];
}

?>
<form method='post' action= "update_3.php">
    <br> RoomID:        <input type="text" name="ID" value = "<?php echo $roomid; ?>" disabled ></br>
    <br> Floors:        <input type="text" name="Fn" value = "<?php echo $floor; ?>" > </br>
    <br> Price:         <input type="text" name="Ln" value = "<?php echo $price; ?>" > </br>
    <br> Single/Double: <input type="text" name="Ad" value = "<?php echo $bedtype; ?>" > </br>
    <br> Room Type:     <input type="text" name="Mj" value = "<?php echo $roomtype; ?>" > </br>

<input type="submit" value="Update">
    
</form>
</html>