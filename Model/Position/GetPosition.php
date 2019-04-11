<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'position_name',
    2   =>  'position_abbr_name',
    3   =>  'organization_type_id',
    4   =>  'person_type_id',
    5   =>  'is_active'
); 
$sql ="SELECT id, position_name, position_abbr_name, organization_type_id, person_type_id, is_active  FROM position";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = "SELECT id, position_name, position_abbr_name, organization_type_id, person_type_id, is_active  FROM position WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (position_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR position_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //position_name
    $subdata[]=$row[2]; //position_abbr_name
    $subdata[]=$row[3]; //organization_type_id
    $subdata[]=$row[4]; //person_type_id
    $subdata[]=$row[5]; //is_active        
    $data[]=$subdata;
}
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
