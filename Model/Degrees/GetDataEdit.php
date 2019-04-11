<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$degreeId = $_POST["degreeId"];
$id = "";
$degreeName = "";
$degreeAbbrName = "";
$degreeDirectpay = "";
$degreeDirectpay1 = "";
$IsActive = "";
// echo $originsId ;

if(isset($degreeId)){
    $sql = " SELECT id, DegreeName, DegreeAbbrName, DegreeDirectpay, DegreeDirectpay1, IsActive FROM ganeral_degree where id = $degreeId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $degreeName = $row['DegreeName'];
        $degreeAbbrName = $row['DegreeAbbrName'];
        $degreeDirectpay = $row['DegreeDirectpay'];
        $degreeDirectpay1 = $row['DegreeDirectpay1'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"degreeName"=>$degreeName,"degreeAbbrName"=>$degreeAbbrName,"degreeDirectpay"=>$degreeDirectpay,"degreeDirectpay1"=>$degreeDirectpay1,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>