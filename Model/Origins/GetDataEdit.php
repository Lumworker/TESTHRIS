<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$originsId = $_POST["originsId"];
$id = "";
$originName = "";
$originAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($originsId)){
    $sql = " SELECT id, origin_name, origin_abbr_name, IsActive FROM general_origin where id = $originsId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $originName = $row['origin_name'];
        $originAbbrName = $row['origin_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"originName"=>$originName,"originAbbrName"=>$originAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>