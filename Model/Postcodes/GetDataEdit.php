<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$postCodeId = $_POST["postCodeId"];
$id = "";
$postCodeNo = "";
$postCodeName = "";
$IsActive = "";
// echo $originsId ;

if(isset($postCodeId)){
    $sql = " SELECT id, postcode_code, postcode_name, postcode_abbr_name, IsActive FROM postcode; where id = $postCodeId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $postCodeNo = $row['postcode_code'];
        $postCodeName = $row['postcode_name'];
        $IsActive = $row['IsActive'];
    }
    $r=array("id"=>$id,"postCodeNo"=>$postCodeNo,"postCodeName"=>$postCodeName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>