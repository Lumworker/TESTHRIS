<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$armyId = $_POST["armyId"];
$id = "";
$armyName = "";
$armyAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($armyId)){
    $sql = " SELECT id, ArmCode, ArmName, ArmAbbrName, IsActive FROM armys where id = $armyId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $armyName = $row['ArmName'];
        $armyAbbrName = $row['ArmAbbrName'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"armyName"=>$armyName,"armyAbbrName"=>$armyAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>