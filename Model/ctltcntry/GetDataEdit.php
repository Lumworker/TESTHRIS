<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$ctltcntryId = $_POST["ctltcntryId"];
$id = "";
$ctltcntryThName = "";
$ctltcntryEngName = "";
$IsActive = "";
// echo $originsId ;

if(isset($ctltcntryId)){
    $sql = " SELECT id, CntryCode, CntryName, CntryEngName, IsActive FROM ctltcntry where id = $ctltcntryId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $ctltcntryThName = $row['CntryName'];
        $ctltcntryEngName = $row['CntryEngName'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"ctltcntryThName"=>$ctltcntryThName,"ctltcntryEngName"=>$ctltcntryEngName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>