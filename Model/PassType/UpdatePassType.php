<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $passTypeId = $_POST['passTypeId'];
    $passTypeName = $_POST['passTypeName'];
    $passTypeAbbrName = $_POST['passTypeAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE pass_type
    SET pass_type_name='$passTypeName', pass_type_abbr_name='$passTypeAbbrName', IsActive=0
    WHERE id=$passTypeId;
    
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