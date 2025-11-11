<?php
$ID = $_POST['ID'];
$MS = $_POST['Mscore'];
$FS = $_POST['Fscore'];
$LS = $_POST['Lscore'];


function call($midF, $finalF, $labF){
    global $ID;
    function calculate($midF, $finalF, $labF){
        return $midF + $finalF + $labF;
    }
    
    echo '<table border="1">';
    echo '<tr bgcolor="yellow">';
    echo '<td>ID</td>';
    echo '<td>Mid</td>';
    echo '<td>Final</td>';
    echo '<td>Lab</td>';
    echo '<td>Total</td>';
    echo '</tr>';
    
    echo '<tr bgcolor="#ADD8E6">';
    echo '<td>'.$ID.'</td>';
    echo '<td>'.$midF.'</td>';
    echo '<td>'.$finalF.'</td>';
    echo '<td>'.$labF.'</td>';
    echo '<td>'.calculate($midF, $finalF, $labF).'</td>';
    echo '</tr>';
    echo '</table>';
}

call($MS,$FS,$LS)

?>