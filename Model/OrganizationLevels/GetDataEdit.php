<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$orglevelId = $_POST["orglevelId"];
$id = "";
$orglevelname = "";
$orglevelAbbrname = "";
$IsActive = "";
// echo $originsId ;

if(isset($orglevelId)){
    $sql = " SELECT id, organization_level_name, organization_level_abbr_name, IsActive FROM organization_level where id = $orglevelId  ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $orglevelname = $row['organization_level_name'];
        $orglevelAbbrname = $row['organization_level_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"orglevelname"=>$orglevelname,"orglevelAbbrname"=>$orglevelAbbrname,"IsActive"=>$IsActive);
    print(json_encode($r));
}
?>