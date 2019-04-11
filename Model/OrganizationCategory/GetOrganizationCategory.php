<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_category_code',
    2   =>  'organization_category_name',
    3   =>  'organization_category_abbr_name',
    4   =>  'IsActive',
);

$sql = "SELECT id,organization_category_code,organization_category_name,organization_category_abbr_name,IsActive FROM organization_category";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
$totalFilter = $totalData;


$sql = "SELECT id,organization_category_code,organization_category_name,organization_category_abbr_name,IsActive FROM organization_category WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_category_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_category_code Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = '
    <a href="../../Views/organization_category/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteOrganizationCategory('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //organization_category_code
    $subdata[] = $row[2]; //organization_category_name
    $subdata[] = $row[3]; //organization_category_abbr_name
    if($row[4] !== 1){
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

 