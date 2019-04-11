<?php

require_once "../../config.php";
// if($conn){echo "con";}

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'prefix_name',
    2   =>  'prefix_abbr_name',
    3   =>  'is_active'
);  

//create column like table in database
$sql ="SELECT id,prefix_name,prefix_abbr_name,is_active FROM prefix ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query=sqlsrv_query($conn,$sql,$params,$options);
$totalData=sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter=$totalData;

//Search
// $sql =" SELECT id,prefix_name,prefix_abbr_name,is_active FROM prefix WHERE 1=1 ";
// if(!empty($request['search']['value'])){
    // $sql.=" AND (prefix_name Like '".$request['search']['value']."%' ";
    // $sql.=" OR prefix_abbr_name Like '".$request['search']['value']."%' ";
    // $sql.=" AND (prefix_name Like 'm%' ";
    // $sql.=" OR prefix_abbr_name Like 'm%' ";
// }

$sql.= " WHERE prefix_name LIKE '%m%' ";


echo $sql;
$query=sqlsrv_query($conn,$sql,$params,$options);
$totalData=sqlsrv_num_rows($query);
//Order
// $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  DESC ".
//     $request['start']."  ,".$request['length']."  ";
// $query=sqlsrv_query($conn,$sql,$params,$options);
// echo "<br>".$sql."<br>";
// if($query){echo "order by";}else{echo "cannnot";}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //name
    $subdata[]=$row[2]; //salary
    $subdata[]=$row[3]; //age           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    // $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
    //             <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</button>';
    $data[]=$subdata;
}

// echo '<pre>';
// print_r($data);
// echo '<pre>';

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data   
);
echo json_encode($json_data);

?>