<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    // $originsId = 0;

    $PrefixsId = $_POST['PrefixsId'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " DELETE FROM general_perfix WHERE id=$PrefixsId ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
