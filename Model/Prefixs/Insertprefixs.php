<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    
    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM general_perfix; ";

    // echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    $PrefixsN = $_POST['PrefixsN'];
    $PrefixsAbrr = $_POST['PrefixsAbrr'];
    
    $isActive = $_POST['isActive'];

     $sql = " INSERT INTO general_perfix
     (perfix_code, perfix_name, perfix_abbr_name,  IsActive)
     VALUES($idNew, '$PrefixsN ', '$PrefixsAbrr',   $isActive);
     ";
     
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

sqlsrv_close($conn);

?>
