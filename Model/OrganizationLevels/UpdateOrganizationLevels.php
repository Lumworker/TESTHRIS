<?php

require_once "../../config.php";
if($conn){echo "con";}

if (!empty($_POST)) {

    $orglevelId = $_POST['orglevelId'];
    $orglevelname = $_POST['orglevelname'];
    $orglevelAbbrname = $_POST['orglevelAbbrname'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE organization_level
    SET organization_level_name='$orglevelname', organization_level_abbr_name='$orglevelAbbrname', IsActive=$isActive
    WHERE id = $orglevelId;
     ";
    echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }

 
}
