<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'ArmCode',
    2   =>  'ArmName',
    3   =>  'ArmAbbrName',
    4   =>  'isActive',
); 

$sql =" SELECT id, ArmCode, ArmName, ArmAbbrName, IsActive FROM armys ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = " SELECT id, ArmCode, ArmName, ArmAbbrName, IsActive FROM armys WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (ArmName Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR ArmAbbrName Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}
$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href="../../Views/Armys/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteArmy('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[0]; //id
    // $subdata[] = $row[1]; //id
    $subdata[] = $row[1]; //origin_code
    $subdata[]= $row[2]; //origin_name
    $subdata[]= $row[3]; //origin_abbr_name
    if($row[4] !== 1){
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    }else{
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    }//status   
    $data[]=$subdata;
}
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
// echo "<pre>";
// print_r($data);
// echo "<pre>";

echo json_encode($json_data);

sqlsrv_close($conn);

?>
