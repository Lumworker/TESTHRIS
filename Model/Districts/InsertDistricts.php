<?php

require_once "../../config.php";
if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM district; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }
    echo $idNew;

    // if ($querySelect) {
    //     echo "บันทึกสำเร็จ";
    // } else {
    //     echo "บันทึกไม่ได้";
    // }

    $districtsName = $_POST['districtsName'];
    $districtsAbbrName = $_POST['districtsAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO district
    (district_code, district_name, district_abbr_name, IsActive)
    VALUES('$idNew', '$districtsName', '$districtsAbbrName',  $isActive);
     ";
    echo $sql;

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);