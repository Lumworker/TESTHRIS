<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $degreeId = $_POST['degreeId'];
    $degreeName = $_POST['degreeName'];
    $degreeAbrrName = $_POST['degreeAbrrName'];
    $degreeDirectpay = $_POST['degreeDirectpay'];
    $degreeDirectpay1 = $_POST['degreeDirectpay1'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE ganeral_degree
    SET DegreeName='$degreeName', DegreeAbbrName='$degreeAbrrName', DegreeDirectpay=$degreeDirectpay, DegreeDirectpay1=$degreeDirectpay1, IsActive=$isActive
    WHERE id=$degreeId; ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);