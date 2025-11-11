<html>
<head><title>Delete a Row</title></head>
<script language="JavaScript">
function confirmDelete() {
    return confirm('Are you sure you want to delete this?');
}
</script>
<body>
<?php
$connect = mysqli_connect("localhost", "root","", "class");
if (!isset($smtDelete)) {
    $sql =' select * from student';
    $result = mysqli_query($connect, $sql);
    $numrows = mysqli_num_rows($result);
    $numfields = mysqli_num_fields($result);

    if (!$result) {
        echo '<b>Error </b>'.mysqli_errno().': '.mysqli_error().'<br>';
    } elseif ($numrows==0) {
        echo '<b>Query executed successfully but no row returns!</b>';
    } else {
        echo '<table border="1" cellspacing="0" cellpadding="3">';
        while ($row = mysqli_fetch_array($result)) {
            echo '<form name="frmDelete'.$row['StudentID'].'" method="post" action="delete2.php">'."\n";
            echo '<tr>';
            for ($i=0; $i<$numfields; $i++) {
                echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
            }
            echo '<input type="hidden" name="id" value="'.$row['StudentID'].'">'."\n";
            echo '<td><input name="smtDelete" type="submit" value="Delete" onClick=" return confirmDelete();"></td>'."\n";
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