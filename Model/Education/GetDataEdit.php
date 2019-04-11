<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$educationId = $_POST["educationId"];
$id = "";
$eduMainCode = "";
$eduMainCodeRef = "";
$courseName = "";
$courseFlag = "";
$remark = "";
$IsActive = "";
// echo $originsId ;

if(isset($educationId)){
    $sql = " SELECT id, EduMainCode, EduMainCodeRef, CourseName, CourseFlag,  Remark, IsActive
    FROM general_education where id = $educationId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $eduMainCode = $row['EduMainCode'];
        $eduMainCodeRef = $row['EduMainCodeRef'];
        $courseName = $row['CourseName'];
        $courseFlag = $row['CourseFlag'];
        $remark = $row['Remark'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"eduMainCode"=>$eduMainCode,"eduMainCodeRef"=>$eduMainCodeRef,"courseName"=>$courseName,"courseFlag"=>$courseFlag,"remark"=>$remark,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>