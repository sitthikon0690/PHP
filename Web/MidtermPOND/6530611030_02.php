<?php
session_start();

// เช็คว่าตัวแปร session['cart'] มีหรือไม่ ถ้าไม่มีให้สร้างตัวแปรนี้
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// คำนวนราคา
if ($_POST['size'] == 'S'){
    $price = $_POST['quantity']*20;
}elseif($_POST['size'] == 'M'){
    $price = $_POST['quantity']*25;
}else{
    $price = $_POST['quantity']*30;
}
// เพิ่มรายการในตะกร้า
$_SESSION['cart'][] = [
    $_POST['menu'],
    $_POST['topping'],
    $_POST['size'],
    $_POST['quantity'],
    $price];
echo "<table border = 1 cellpadding='10' >";
    echo "<thead>" ;
        echo "<tr>";
        echo "<th>ลำดับ</th>";
        echo "<th>เมนู</th>";
        echo "<th>ท็อปปิ้ง</th>";
        echo "<th>ขนาด</th>";
        echo "<th>จำนวน</th>";
        echo "<th>ราคา (บาท)</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
        for ($x = 0; $x < count($_SESSION['cart']); $x++){
            echo "<tr>";
                echo "<td>"; echo $x+1; echo "</td>";//ลำดับ
                for ($j = 0; $j < 5; $j++){
                    echo "<td>"; echo $_SESSION['cart'][$x][$j]; echo "</td>";
                }
            echo "</tr>";
        }
    echo "</tbody>";
echo '</table>';
echo '<a href="6530611030_01.php">เพิ่มเมนู</a> &nbsp;&nbsp;&nbsp; ';
echo '<a href="6530611030_03.php">สั่ง</a>';
?>