<?php

require_once "../../config.php";

$orgCategoryId = $_POST["orgCategoryId"];

$id = "";
$orgCategoryName = "";
$orgCategoryAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($orgCategoryId)){
    $sql = " SELECT id, organization_category_name, organization_category_abbr_name, IsActive FROM organization_category where id = $orgCategoryId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $orgCategoryName = $row['organization_category_name'];
        $orgCategoryAbbrName = $row['organization_category_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"orgCategoryName"=>$orgCategoryName,"orgCategoryAbbrName"=>$orgCategoryAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>