<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$passStatusId = $_POST["passStatusId"];
$id = "";
$passCode = "";
$passName = "";
$passAbbrName = "";
$isBelongToRtaf = "";
$flagSenior = "";
$IsActive = "";
// echo $originsId ;

if(isset($passStatusId)){
    $sql = " SELECT id, PassCode, PassName, PassAbbrName, IsBelongToRtaf, FlagSenior, IsActive FROM pass_status where id = $passStatusId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $passCode = $row['PassCode'];
        $passName = $row['PassName'];
        $passAbbrName = $row['PassAbbrName'];
        $isBelongToRtaf = $row['IsBelongToRtaf'];
        $flagSenior = $row['FlagSenior'];
        $IsActive = $row['IsActive'];
    }

    $r=array("id"=>$id,"passCode"=>$passCode,"passName"=>$passName,"passAbbrName"=>$passAbbrName,"isBelongToRtaf"=>$isBelongToRtaf,"flagSenior"=>$flagSenior,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>