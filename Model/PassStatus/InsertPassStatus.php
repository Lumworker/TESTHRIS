<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    // $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM pass_type; ";

    // echo $sqlInsertSeqNoAndCode;

    // $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // $idNew = "";
    // while ($row = sqlsrv_fetch_array($querySelect)) {
    //     $id = $row['maxid'];
    //     $idNew = $id+1;
    // }

    // if ($querySelect) {
    //     echo "บันทึกสำเร็จ";
    // } else {
    //     echo "บันทึกไม่ได้";
    // }

    $passCode = $_POST['passCode'];
    $passName = $_POST['passName'];
    $passAbbrName = $_POST['passAbbrName'];
    $isBelongToRtaf = $_POST['isBelongToRtaf'];
    $flagSenior = $_POST['flagSenior'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO pass_status
    (PassCode, PassName, PassAbbrName, IsBelongToRtaf, FlagSenior, IsActive)
    VALUES($passCode, '$passName', '$passAbbrName', '$isBelongToRtaf', '$flagSenior', $isActive);
    
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