<?php
$num = $_POST['N'];
$col = $_POST['C'];
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
