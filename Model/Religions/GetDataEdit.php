<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$religionsId = $_POST["religionsId"];
$id = "";
$religionsName = "";
$IsActive = "";
// echo $originsId ;

if(isset($religionsId)){
    $sql = " SELECT id, ReligionName, IsActive FROM general_religion where id = $religionsId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $religionsName = $row['ReligionName'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"religionsName"=>$religionsName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>