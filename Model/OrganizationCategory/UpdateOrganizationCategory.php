<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $orgCategoryId = $_POST['orgCategoryId'];
    $orgCategoryName = $_POST['orgCategoryName'];
    $orgCategoryAbbrName = $_POST['orgCategoryAbbrName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE organization_category
    SET organization_category_name='$orgCategoryName', organization_category_abbr_name='$orgCategoryAbbrName', IsActive=$isActive
    WHERE id=$orgCategoryId
    
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