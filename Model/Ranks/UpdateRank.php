<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $rankId = $_POST['rankId'];
    $rankcode = $_POST['rankcode'];
    $rankName = $_POST['rankName'];
    $rankAbbrName = $_POST['rankAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_rankcode
    SET RankCode=$rankcode, RankAbbrName='$rankAbbrName', RankName='$rankName', IsActive=$isActive
    WHERE id=$rankId;    
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