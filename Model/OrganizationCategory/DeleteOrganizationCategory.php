<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    // $originsId = 0;

    $orgCategoryId = $_POST['orgCategoryId'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " DELETE FROM organization_category WHERE id=$orgCategoryId ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
