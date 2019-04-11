<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$rankId = $_POST["rankId"];
$id = "";
$rankcode = "";
$rankName = "";
$rankAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($rankId)){
    $sql = " SELECT id, RankCode, RankName, RankAbbrName, IsActive FROM general_rankcode where id = $rankId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $rankcode = $row['RankCode'];
        $rankName = $row['RankName'];
        $rankAbbrName = $row['RankAbbrName'];
        $IsActive = $row['IsActive'];
    }
    $r=array("id"=>$id,"rankcode"=>$rankcode,"rankName"=>$rankName,"rankAbbrName"=>$rankAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>