<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $OrganizationPartsId = $_POST['OrganizationPartsId'];
    $OrganizationPartsName = $_POST['OrganizationPartsName'];
    $OrganizationPartsAbbrName = $_POST['OrganizationPartsAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE organization_part
    SET organization_part_name='$OrganizationPartsName', organization_part_abbr_name='$OrganizationPartsAbbrName', IsActive=$isActive
    WHERE id=$OrganizationPartsId;
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