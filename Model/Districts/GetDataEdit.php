<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$districtsId = $_POST["districtsId"];
$id = "";
$districtName = "";
$degreeAbbrName = "";
$IsActive = "";
// echo $districtsId ;

if(isset($districtsId)){
    $sql = " SELECT id,district_name, district_abbr_name, IsActive FROM district where id = $districtsId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $districtsName = $row['district_name'];
        $districtsAbbrName = $row['district_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $districtsName;
        // echo $districtsAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"districtsName"=>$districtsName,"districtsAbbrName"=>$districtsAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>