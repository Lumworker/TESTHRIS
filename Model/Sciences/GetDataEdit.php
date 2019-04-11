<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$PrefixsId = $_POST["PrefixsId"];
// $PrefixsId = 11;
$id = "";
$PrefixsN = "";
$PrefixsAbrr = "";
$isActive = "";
echo $originsId ;

if(isset($PrefixsId)){
    $sql = " SELECT id, perfix_code, perfix_name, perfix_abbr_name, IsActive
    FROM general_perfix WHERE id = $PrefixsId
     ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $PrefixsN = $row['perfix_name'];
        $PrefixsAbrr = $row['perfix_abbr_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $PrefixsN;
        // echo $PrefixsAbrr;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"PrefixsN"=>$PrefixsN,"PrefixsAbrr"=>$PrefixsAbrr,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>