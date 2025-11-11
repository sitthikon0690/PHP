<html>
<?php
$connect = mysqli_connect("localhost", "root", "", "class");
$sql = 'select StudentID from student';
$result = mysqli_query($connect, $sql);
?>
<form method='post' action="select_5.php">
    please select Student ID:
    <select name="Id">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['StudentID'] . "'>" . $row['StudentID'] . "</option>";
        }
        ?>
    </select><br>
    <input type="submit" value="submit">

</form>
</html>


