<!-- โทมัส รีเกอร์ 6530611010 -->
<?php
$tour = $_POST['tour'];
$date = $_POST['Tdate'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$pnum = $_POST['Pnum'];

function missing($name,$phone,$pnum){
    $missing = array();
    if (empty($name)) {$missing[] = "ชื่อ-สกุล";}
    if (empty($phone)) {$missing[] = "เบอร์โทรศัพท์";}
    if (empty($pnum)) {$missing[] = "จำนวน (คนเข้าร่วม)";}
    return $missing;
}

$data = missing($name,$phone,$pnum);

if (!empty($data)) {
    echo"<h1>ยืนยันข้อมูลไม่ผ่าน</h1>";
    foreach ($data as $missingdata) {
        echo "ไม่มีข้อมูล <b>$missingdata</b> กรุณากรอกใหม่อีกครั้ง <br></br>";
    }
    echo "<a href='6530611010_01.php'><button>กลับไปหน้ากรอก</button></a>";
}
else {
    echo"<h1>ยืนยันข้อมูลผ่าน</h1>";
    echo "<p>ขอบคุณ <b>คุณ $name</b> สำหรับการจอง <b>$tour</b> ในวันที่ <b>$date</b> สำหรับ <b>$pnum</b> คน</p>";
    echo "<p>เราจะติดต่อคุณไปที่เบอร์ <b>$phone</b> สำหรับรายละเอียดเพิ่มเติม</p>";
    echo "<a href='6530611010_01.php'><button>จองอีกครั้ง</button></a>";
    }
?>