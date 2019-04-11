<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$passTypeId = $_POST["passTypeId"];
$id = "";
$passTypeName = "";
$passTypeAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($passTypeId)){
    $sql = " SELECT id, pass_type_name, pass_type_abbr_name, IsActive FROM pass_type where id = $passTypeId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $passTypeName = $row['pass_type_name'];
        $passTypeAbbrName = $row['pass_type_abbr_name'];
        $IsActive = $row['IsActive'];
    }

    $r=array("id"=>$id,"passTypeName"=>$passTypeName,"passTypeAbbrName"=>$passTypeAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>