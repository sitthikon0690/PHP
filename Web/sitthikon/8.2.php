<?php
    //สิทธิกร ชมภูพื้น 6530611030
    $Invalid = array();
    // ตรวจสอบว่ามีการอัปโหลดไฟล์
    if ($_FILES['picfile']['error'] === UPLOAD_ERR_OK) {
        // ตรวจสอบขนาดไฟล์
        if ($_FILES['picfile']['size'] <= 10000000) { // ตรวจสอบว่าขนาดของไฟล์ไม่เกิน 100,000 ไบต์
            // ตรวจสอบชนิดของไฟล์
            if (getimagesize($_FILES['picfile']['tmp_name']) !== false) { // ตรวจสอบว่าไฟล์เป็นรูปภาพหรือไม่
            } else {
                $Invalid[] = "ไฟล์ไม่ใช่รูปภาพ"; 
            }
        } else {
            $Invalid[] = "ไฟล์มีขนาดใหญ่เกินไป"; 
        }
    } else {
        $Invalid[] = "ไม่ได้อัปโหลดรูปภาพ"; 
    }

    if (null == $_POST["firstname"]){
        $Invalid[] = "Firstname is None";
    }else{
        if (!preg_match("/^[A-Za-z]+$/",$_POST["firstname"])){
            $Invalid[] = "Invalid firstname ";
        }
    }

    if (null == $_POST["lastname"]){
        $Invalid[] = "Lirstname is None";
    }else{
        if (!preg_match("/^[A-Za-z]+$/",$_POST["lastname"])){
            $Invalid[] = "Invalid lirstname ";
        }
    }

    if (!isset($_POST["gender"])){
        $Invalid[] = "Gender is None";
    }

    if (null == $_POST["address"]){
        $Invalid[] = "Address is None";
    }

    if (null == $_POST["tele"]){
        $Invalid[] = "Telephone Number is None";
    }else{
        if (!preg_match('/^[0-9]+$/', $_POST["tele"])){
            $Invalid[] = "Invalid Telephone Number";
        }
    }

    if (null == $_POST["home"]){
        $Invalid[] = "Homepage is None";
    }else{
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["home"])){
            $Invalid[] = "Invalid Homepage";
        }
    }

    if (null == $_POST["email"]){
        $Invalid[] = "Email is None";
    }else{
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $Invalid[] = "Invalid Email";
        }
    }

    if (!isset($_POST["Education"])){
        $Invalid[] = "Education is None";
    }

    //ต้องเลือกอย่างน้อยหนึ่งค่า
    if (!isset($_POST["position1"]) &&
        !isset($_POST["position2"]) &&
        !isset($_POST["position3"]) &&
        !isset($_POST["position4"]) &&
        !isset($_POST["position5"]))
        {
        $Invalid[] = "Position is None";
    }

    if (null == $_POST["salary"]){
        $Invalid[] = "Salary is None";
    }else{
        if (!$_POST["salary"] > 0){
            $Invalid[] = "Invalid Salary";
        }
    }


    if(!empty($Invalid)){
        for ($x = 0; $x < count($Invalid); $x++) {
            echo '<span style="color: red;">'.$Invalid[$x]."</span><br>";
           }
        include("8.1.php");           
    }else{
        $newfile = 'image/'.$_FILES['picfile']['name'];
        if(copy($_FILES['picfile']['tmp_name'],$newfile)){
            echo '<img width="120" height="150" src="'.$newfile.'">';
        }
        echo "<br>";
        echo "Firstname : ".$_POST["firstname"]."<br>";
        echo "Lastname : ".$_POST["lastname"]."<br>";
        echo "Sex : ".$_POST["gender"]."<br>";
        echo "Birthdate : ".$_POST["selectdate"]."/".$_POST["selectmonth"]."/".$_POST["year"]."<br>";
        echo "Sex : ".$_POST["address"]."<br>";
        echo "Phone : ".$_POST["tele"]."<br>";
        echo "Homepage : ".$_POST["home"]."<br>";
        echo "Email : ".$_POST["email"]."<br>";
        echo "Education : ".$_POST["Education"]."<br>";
        $j=1;
        for ($x = 1; $x <= 5; $x++){
            if (isset($_POST["position".$x])){
                echo "Position ".$j++.": ".$_POST["position".$x]."<br>";
            }
        }
        echo "Salary : ".$_POST["salary"]."<br>";
        echo "Experience : ".$_POST["Experience"];
    }
?>

