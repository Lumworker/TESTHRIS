<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$OrganizationPartsId = $_POST["OrganizationPartsId"];


$id = "";
$OrganizationPartsName = "";
$OrganizationPartsAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($OrganizationPartsId)){
    $sql = " SELECT id, organization_part_name, organization_part_abbr_name, IsActive FROM organization_part where id = $OrganizationPartsId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $OrganizationPartsName = $row['organization_part_name'];
        $OrganizationPartsAbbrName = $row['organization_part_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"OrganizationPartsName"=>$OrganizationPartsName,"OrganizationPartsAbbrName"=>$OrganizationPartsAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>