<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization_level; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    $orglevelname = $_POST['orglevelname'];
    $orglevelAbbrname = $_POST['orglevelAbbrname'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO organization_level
    (organization_level_code, organization_level_name, organization_level_abbr_name, IsActive, created_by, created_date, update_by, update_date)
    VALUES('$idNew', '$orglevelname', '$orglevelAbbrname', $isActive, '', '', '', '');";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>