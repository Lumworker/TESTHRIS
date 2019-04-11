<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $PrefixsId = $_POST['PrefixsId'];
    $PrefixsN = $_POST['PrefixsN'];
    $PrefixsAbrr = $_POST['PrefixsAbrr'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_perfix
    SET perfix_name='$PrefixsN', perfix_abbr_name='$PrefixsAbrr', IsActive=$isActive
    WHERE id=$PrefixsId;
     ";
    echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);