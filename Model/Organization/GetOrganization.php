<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_code',
    2   =>  'organization_name',
    3   =>  'organization_abbr_name',
    4   =>  'airforce',
    5   =>  'isActive'
);

$sql = " SELECT id, organization_code, organization_name, organization_abbr_name, airforce, IsActive
FROM organization ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);

$totalFilter = $totalData;


$sql = " SELECT id, organization_code, organization_name, organization_abbr_name, airforce, IsActive
FROM organization  WHERE 1=1 ";

// $request['search']['value'] = ส;

if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    // $sql.=" AND (organization_part_name Like N'%m%' ";
    // $sql.=" OR organization_part_abbr_name Like N'%m%') ";
    // echo $sql;
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$totalData = sqlsrv_num_rows($query);


$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = '
    <a href="../../Views/Organizations/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteOrganizations('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //organization_code
    $subdata[] = $row[2]; //organization_name
    $subdata[] = $row[3]; //organization_abbr_name     
    $subdata[] = $row[4]; //status  
    if($row[5] !== 1){
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    }else{
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    }//status   
    $data[] = $subdata;
}
$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

 