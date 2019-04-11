<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $passStatusId = $_POST['passStatusId'];
    $passCode = $_POST['passCode'];
    $passAbbrName = $_POST['passTypeAbbrName'];
    $isBelongToRtaf = $_POST['isBelongToRtaf'];
    $flagSenior = $_POST['flagSenior'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE pass_status
    SET PassCode=$passCode, PassName='$passName', PassAbbrName='$passAbbrName', IsBelongToRtaf='$isBelongToRtaf', FlagSenior='$flagSenior', IsActive=0, CreatedBy=0, CreatedDate='', UpdateBy=0, UpdateDate=''
    WHERE id=$passStatusId;
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