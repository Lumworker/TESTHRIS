<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    $rankcode = $_POST['rankcode'];
    $rankName = $_POST['rankName'];
    $rankAbbrName = $_POST['rankAbbrName'];
    $isActive = $_POST['isActive'];

    echo $rankcode ;
    echo $rankName ;
    echo $rankAbbrName ;
    echo $isActive ;

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO general_rankcode
    (RankCode, RankAbbrName, RankName, IsActive)
    VALUES($rankcode, '$rankAbbrName', '$rankName', $isActive)
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