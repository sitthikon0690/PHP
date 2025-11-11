<?php
$num =5;
echo '<table border = 3>';
$i=0;
while($i++ < $num){
    echo '<tr>';
    $j=0;
    while($j++ < $num){
        echo '<td>';
        echo "Row $i";
        echo '/';
        echo "Column $j";
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

<?php echo '<br>'; ?>

<?php
$num =5;
echo '<table border = 3>';
$i=1;
do{
    echo '<tr>';
    $j=1;
    do{
        echo '<td>';
        echo "Row $i";
        echo '/';
        echo "Column $j";
        echo '</td>';
    }while($j++ < $num);
        echo '</tr>';
}while($i++ < $num);
    echo '</table>'; 
?>
