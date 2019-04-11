<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'postcode_code',
    2   =>  'postcode_name',
    3   =>  'postcode_abbr_name',
    4   =>  'isActive',
); 

$sql =" SELECT id, postcode_code, postcode_name, postcode_abbr_name, IsActive FROM postcode; ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = " SELECT id, postcode_code, postcode_name, postcode_abbr_name, IsActive FROM postcode WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (postcode_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR postcode_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}
$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href="../../Views/Postcodes/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deletePostCode('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[0]; //id
    // $subdata[] = $row[1]; //id
    $subdata[] = $row[1]; //postcode_code
    $subdata[]= $row[2]; //postcode_name
    $subdata[]= $row[3]; //postcode_abbr_name
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
