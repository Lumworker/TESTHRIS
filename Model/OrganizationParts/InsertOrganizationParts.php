<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {


    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization_part; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id + 1;
    }

    $organizationPartName = $_POST['organizationPartName'];
    $organizationPartAbbrName = $_POST['organizationPartAbbrName'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO organization_part
    (organization_part_code, organization_part_name, organization_part_abbr_name, IsActive, created_by, created_date, update_by, update_date)
    VALUES('$idNew', '$organizationPartName', '$organizationPartAbbrName', $isActive, 0, '', 0, '') ";

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
 