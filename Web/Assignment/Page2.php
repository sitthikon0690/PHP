<?php
$num = $_POST['num'];
echo '<table border = 3
bgcolor="FF00CC">';
echo '<tr>';
$i=0;

while($i++ < $num){
    echo '<td>';
    echo $i;
    echo '</td>';
}
echo '</tr>';
echo '</table>';
?>



<?php echo "<br>" ?>



<?php
$num = $_POST['num'];
echo '<table border = 3
bgcolor="FF00CC">';
echo '<tr>';
for($i = 1; $i <= $num; $i++){
    echo '<td>';
    echo $i;
    echo '</td>';
}
echo '</tr>';
echo '</table>';
?>



<?php echo "<br>" ?>



<?php
$num = $_POST['num'];
echo '<table border = 3
bgcolor="FF00CC">';
echo '<tr>';
for($i = 1; $i <= $num; $i++){
    echo '<tr>';
    $j=0;
        for($j = 1; $j <= $num; $j++){
            echo '<td>';
            echo $i;
            echo '</td>';
        }
    echo '</tr>';
}
echo '</tr>';
echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$num = $_POST['num'];
echo '<table border = 3>';
$i=0;
    while($i++ < $num){
        echo '<tr>';
        $j=0;
        while($j++ < $num){
            echo '<td>';
            echo 'No. ';
            echo $i;
            echo '_';
            echo $j;
            echo '</td>';
        }       
    echo '</tr>';
}
echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$num = $_POST['num'];
$col = $_POST['col'];

switch ($col) {
    case 1:
        $col = '#008000';
        break;
    case 2:
        $col = '#FFFF00';
        break;
    case 3:
        $col = '#FFC0CB';
        break;
    case 4:
        $col = '#0000FF';
        break;
    default:
        $col = '#FFFFFF';   
        break;
}

echo '<table border="3" 
bgcolor=" ' . $col . ' ">';
$i=0;
    while($i++ < $num){
        echo '<tr>';
        $j=0;
        while($j++ < $num){
            echo '<td>';
            echo 'No. ';
            echo $i;
            echo '_';
            echo $j;
            echo '</td>';
        }       
    echo '</tr>';
}
echo '</table>';
?>


<?php echo "<br>" ?>

