<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $personTypesId = $_POST['personTypesId'];
    $personTypeName = $_POST['personTypeName'];
    $personTypeCond = $_POST['personTypeCond'];
    $reservesGroup = $_POST['reservesGroup'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE person_type
    SET PersonTypeName='$personTypeName', PersonTypeCond='$personTypeCond', ReservesGroup='$reservesGroup', IsActive=$isActive
    WHERE id=$personTypesId;

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