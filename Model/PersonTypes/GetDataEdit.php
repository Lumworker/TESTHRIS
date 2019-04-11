<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$personTypesId = $_POST["personTypesId"];
$id = "";
$personTypeName = "";
$personTypeCond = "";
$reservesGroup = "";
$IsActive = "";
// echo $originsId ;

if(isset($personTypesId)){
    $sql = " SELECT id, PersonTypeName, PersonTypeCond, ReservesGroup, IsActive FROM person_type where id = $personTypesId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $personTypeName = $row['PersonTypeName'];
        $personTypeCond = $row['PersonTypeCond'];
        $reservesGroup = $row['ReservesGroup'];
        $IsActive = $row['IsActive'];
    }

    $r=array("id"=>$id,"personTypeName"=>$personTypeName,"personTypeCond"=>$personTypeCond,"reservesGroup"=>$reservesGroup,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>