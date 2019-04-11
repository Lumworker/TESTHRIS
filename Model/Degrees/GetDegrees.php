<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'DegreeCode',
    2   =>  'DegreeName',
    3   =>  'DegreeAbbrName',
    4   =>  'DegreeDirectpay',
    5   =>  'DegreeDirectpay1',
    6   =>  'isActive',
); 

$sql =" SELECT id, DegreeCode, DegreeName, DegreeAbbrName, DegreeDirectpay, DegreeDirectpay1, IsActive FROM ganeral_degree ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = " SELECT id, DegreeCode, DegreeName, DegreeAbbrName, DegreeDirectpay, DegreeDirectpay1, IsActive FROM ganeral_degree WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (DegreeName Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR DegreeAbbrName Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}
$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href="../../Views/degrees/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteDegrees('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[0]; //id
    // $subdata[] = $row[1]; //id
    $subdata[] = $row[1]; //DegreeCode
    $subdata[]= $row[2]; //DegreeName
    $subdata[]= $row[3]; //DegreeAbbrName
    $subdata[]= $row[4]; //DegreeDirectpay
    $subdata[]= $row[5]; //DegreeDirectpay1
    if($row[6] !== 1){
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
