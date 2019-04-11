<?php

require_once "../../config.php";
if($conn){echo "con";}

if (!empty($_POST)) {

    $id = $_POST['id'];
    $nationCode = $_POST['nationCode'];
    $nationName = $_POST['nationName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_nation
    SET NationCode='$nationCode', NationName='$nationName', IsActive=$isActive
    WHERE id=$id;
     ";
    echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }

 
}
