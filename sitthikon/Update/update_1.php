<html>
<head><title>Update a Row</title></head>
<script language="JavaScript">
function confirmUpdate() {
    return confirm('Are you sure you want to Update this?');
}
</script>
<body>

<?php
$connect = mysqli_connect("localhost", "root","", "hotel");
if (!isset($smtUpdate)) {
    $sql =' select * from Hotel';
    $result = mysqli_query($connect, $sql);
    $numrows = mysqli_num_rows($result);
    $numfields = mysqli_num_fields($result);

    if (!$result) {
        echo '<b>Error </b>';
    } elseif ($numrows==0) {
        echo '<b>Query executed successfully but no row returns!</b>';
    } else {
        echo '<table border="1" cellspacing="0" cellpadding="3">';
        echo '<tr>';
        echo '<td>RoomID</td>';
        echo '<td>Floors</td>';
        echo '<td>Price</td>';
        echo '<td>SD</td>';
        echo '<td>Room Type</td>';
        echo '<td>Update</td>';
        echo '</tr>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<form name="frmUpdate'.$row['Room_id'].'" method="post" action="update_2.php">'."\n";
            echo '<tr>';
            for ($i=0; $i<$numfields; $i++) {
                echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
            }
            echo '<input type="hidden" name="id" value="'.$row['Room_id'].'">'."\n";
            echo '<td><input name="smtUpdate" type="submit" value="Update" onClick=" return confirmUpdate();"></td>'."\n";
            echo '</tr>'."\n";
            echo '</form>'."\n";
        }
        echo '</table>';
    }
}
 mysqli_close($connect);
?>

</body>
</html>