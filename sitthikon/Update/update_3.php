<?php
$connect = mysqli_connect("localhost", "root", "", "hotel");

if(isset($_POST['ID'])) {
    $roomid = $_POST['ID'];
    $floor = $_POST['Fn'];
    $price = $_POST['Ln'];
    $bedtype = $_POST['Ad'];
    $roomtype = $_POST['Mj'];

    $sql = "update hotel set Floors = '$floor', Price = '$price', SD = '$bedtype', Room_Type = '$roomtype' WHERE Room_id = '$roomid'";
    
    if(mysqli_query($connect, $sql)) {
        echo '<span style="color:#FE0000; text-align:center; font-weight: bold; font-size: 24px;"> Congratulation!!! The Record is updated </span>';
        
        $sql = "select * from hotel";
        $result = mysqli_query($connect, $sql);
            echo "<br><br>";
            echo '<table border="1" cellpadding="0" cellspacing="0">';
            echo '<tr>';
            echo '<td>RoomID</td>';
            echo '<td>Floors</td>';
            echo '<td>Price</td>';
            echo '<td>SD</td>';
            echo '<td>Room Type</td>';
            echo '</tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                if($row['Room_id'] == $roomid){
                    echo '<tr style="background-color: lightblue;">';
                    echo '<td>' . $row['Room_id'] . '</td>';
                    echo '<td>' . $row['Floors'] . '</td>';
                    echo '<td>' . $row['Price'] . '</td>';
                    echo '<td>' . $row['SD'] . '</td>';
                    echo '<td>' . $row['Room_Type'] . '</td>';
                    echo '</tr>';
                }else{
                    echo '<tr style="background-color: white;">';
                    echo '<td>' . $row['Room_id'] . '</td>';
                    echo '<td>' . $row['Floors'] . '</td>';
                    echo '<td>' . $row['Price'] . '</td>';
                    echo '<td>' . $row['SD'] . '</td>';
                    echo '<td>' . $row['Room_Type'] . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        }
    } else {
        echo "Error update";
    }

mysqli_close($connect);
?>