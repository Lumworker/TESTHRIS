<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $armyId = $_POST['armyId'];
    $armyName = $_POST['armyName'];
    $armyAbbrName = $_POST['armyAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE armys
    SET ArmName='$armyName', ArmAbbrName='$armyAbbrName', IsActive=$isActive
    WHERE id=$armyId
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