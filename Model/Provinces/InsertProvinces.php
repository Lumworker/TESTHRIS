<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM general_province; ";

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

    $provinceName = $_POST['provinceName'];
    $provinceAbbrName = $_POST['provinceAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO general_province
    (province_code, province_name, province_abbr_name, country_id, IsActive, created_by, created_date, update_by, update_date)
    VALUES('', '$provinceName', '$provinceAbbrName', 0, $isActive, 0, '', 0, '');
    
    
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