<?php
require_once "../../config.php";

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

## Total number of records without filtering
$sql = " select id,prefix_name,prefix_abbr_name,is_active from prefix ";
$sel = sqlsrv_query($conn,$sql);
// $records = sqlsrv_fetch_array($sel);
$totalRecords = sqlsrv_num_rows($sel);
$totalRecordwithFilter = $totalRecords;

## Fetch records
// $empQuery = "select id,prefix_name,prefix_abbr_name,is_active from prefix WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
// $empRecords = sqlsrv_query($conn, $empQuery);

## Search 
if($searchValue != " "){
//    $searchQuery = " where  and (prefix_name like '%m%' or prefix_abbr_name like '%m%' ) ";
    $sql.= " where prefix_name like N'%".$searchValue."%' ";
    // $sql.= " where prefix_name like N'%น%' ";
    // echo $sql;
    $sel = sqlsrv_query($conn,$sql,$params,$options);
    // $records = sqlsrv_fetch_array($sel);
    $totalRecords = sqlsrv_num_rows($sel);
    
}
// 

## Total number of record with filtering
// $sel = sqlsrv_query($conn,"select id,prefix_name,prefix_abbr_name,is_active from prefix WHERE 1=1 ");
// $records = sqlsrv_fetch_array($sel);

echo $sql;

$data = array();

while ($row = sqlsrv_fetch_array($sel)) {
   $data[] = array( 
      "id"=>$row['id'],
      "prefix_name"=>$row['prefix_name'],
      "prefix_abbr_name"=>$row['prefix_abbr_name'],
      "is_active"=>$row['is_active']
   );
}

// echo '<pre>';
// print_r($data);
// echo '<pre>';

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecordwithFilter,
  "iTotalDisplayRecords" => $totalRecords,
  "aaData" => $data
);

echo json_encode($response);
?>