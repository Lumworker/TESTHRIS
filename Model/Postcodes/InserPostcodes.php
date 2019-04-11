<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    $postCodeNo = $_POST['postCodeNo'];
    $postCodeName = $_POST['postCodeName'];
    $isActive = $_POST['isActive'];

    // echo $postCodeNo ;
    // echo $postCodeName ;
    // echo $isActive ;

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO postcode
    (postcode_code, postcode_name,  IsActive)
    VALUES('$postCodeNo', '$postCodeName', $isActive);
    ";
    
    echo $sql;

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);