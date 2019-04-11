<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $religionsId = $_POST['religionsId'];
    $religionsName = $_POST['religionsName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_religion
    SET ReligionName='$religionsName', IsActive=$isActive
    WHERE id=$religionsId;
     ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);