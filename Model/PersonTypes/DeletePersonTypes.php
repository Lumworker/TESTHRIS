<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    // $originsId = 0;

    $personTypesId = $_POST['personTypesId'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " DELETE FROM person_type WHERE id=$personTypesId; ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
