<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $districtsId = $_POST['districtsId'];
    $districtsName = $_POST['districtsName'];
    $districtsAbbrName = $_POST['districtsAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE district
    SET district_name='$districtsName', district_abbr_name='$districtsAbbrName', IsActive=$isActive
    WHERE id=$districtsId;
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