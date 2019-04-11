<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $originsId = $_POST['originsId'];
    $originName = $_POST['originName'];
    $originAbbrName = $_POST['originAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_origin
    SET origin_name='$originName', origin_abbr_name='$originAbbrName', IsActive=$isActive
    WHERE id=$originsId;
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