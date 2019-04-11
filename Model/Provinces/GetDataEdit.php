<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$ProvincesId = $_POST["ProvincesId"];
$id = "";
$provinceName = "";
$provinceAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($ProvincesId)){
    $sql = " SELECT id, province_name, province_abbr_name, IsActive FROM general_province where id = $ProvincesId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $provinceName = $row['province_name'];
        $provinceAbbrName = $row['province_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"provinceName"=>$provinceName,"provinceAbbrName"=>$provinceAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>