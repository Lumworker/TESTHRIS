<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM armys; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    // if ($querySelect) {
    //     echo "บันทึกสำเร็จ";
    // } else {
    //     echo "บันทึกไม่ได้";
    // }

    $armyName = $_POST['armyName'];
    $armyAbbrName = $_POST['armyAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO armys
    (ArmCode, ArmName, ArmAbbrName, IsActive)
    VALUES($idNew, '$armyName', '$armyAbbrName', $isActive)
    ";
    // echo $sql;

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);