<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $postCodeNo = $_POST['postCodeNo'];
    $postCodeName = $_POST['postCodeName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE postcode
    SET postcode_code='$postCodeNo', postcode_name='$postCodeName'
    WHERE id=$isActive;
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