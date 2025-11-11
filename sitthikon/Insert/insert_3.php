<html>
<?php
$connect = mysqli_connect("localhost", "root", "", "class");
$sql = 'select distinct TeacherID from student';
$result = mysqli_query($connect, $sql);
?>

<form method='post' action= "insert_2.php">
    <br> Student ID:
<input type="text" name="ID"> </br>
    <br> Firstname:
<input type="text" name="Fn"> </br>
    <br> Lastname:
<input type="text" name="Ln"> </br>
    <br> Address:
<input type="text" name="Ad"> </br>
    <br> Major:
<input type="text" name="Mj"> </br>
    <br> Teacher ID:
<select name="Tid">
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['TeacherID'] . "'>" . $row['TeacherID'] . "</option>";
        }
    ?>
</select>

<input type="submit" value="insert">
    
</form>
</html>