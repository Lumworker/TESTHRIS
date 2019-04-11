<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $ProvincesId = $_POST['ProvincesId'];
    $provinceName = $_POST['provinceName'];
    $provinceAbbrName = $_POST['provinceAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_province
    SET province_name='$provinceName', province_abbr_name='$provinceAbbrName', IsActive=$isActive
    WHERE id=$ProvincesId;
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