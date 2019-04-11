<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_type_code',
    2   =>  'organization_type_name',
    3   =>  'start_date',
    4   =>  'end_date',
    5   =>  'IsActive',
);

$sql = " SELECT id, organization_type_code, organization_type_name, start_date, end_date, IsActive, created_by, created_date, update_by, update_date
FROM organization_type;
 ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
$totalFilter = $totalData;


$sql = " SELECT id, organization_type_code, organization_type_name, start_date, end_date, IsActive, created_by, created_date, update_by, update_date
FROM organization_type WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_type_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_type_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

//Order
// $sql .= " ORDER BY " . $col[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'] . "  DESC " .
//     $request['start'] . "  ," . $request['length'] . "  ";
//     $query = sqlsrv_query($conn, $sql, $params, $options);
//     if($query){echo "ccc";}else{echo "nnn";};


// echo $sql;
$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = '
    <a href="../../Views/organization_types/edit.php?id=' . $row[0] . '"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="' . $row[0] . '"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteOrganizationCategory(' . $row[0] . ')" id="' . $row[0] . '"></i></a>
    '; //id
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //organization_type_code
    $subdata[] = $row[2]; //organization_type_name
    if ($row[3] == false) { //start date
        $subdata[] =  " - "; // กรณีค่าเป็นว่าง
    } else {
        $subdata[] = date("d-m-Y", strtotime($row['4'])); //set date format เพื่อที่จะเรื่องออกมาโชว์
    }

    if ($row[4] == false) {
        $subdata[] =  " - "; // กรณีค่าเป็นว่าง
    } else {
        $subdata[] =  date_format($row[4], "d-m-Y"); //set date format เพื่อที่จะเรื่องออกมาโชว์
    }

    if ($row[5] !== 1) {
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    } else {
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    } //status   
    $data[] = $subdata;
}
$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
