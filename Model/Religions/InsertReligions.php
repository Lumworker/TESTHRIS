<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM general_religion ";

    // echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // if($querySelect){echo "query";}else{echo "not";}

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id + 1;
    }
// echo $idNew;

    $religionsName = $_POST['religionsName'];
    $isActive = $_POST['isActive'];

    $sql = "INSERT INTO general_religion
    (ReligionCode, ReligionName, IsActive)
    VALUES($idNew, '$religionsName', $isActive);
    ";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}

sqlsrv_close($conn);

