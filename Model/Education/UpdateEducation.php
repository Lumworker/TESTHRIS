<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $educationId = $_POST['educationId'];
    $eduMainCode = $_POST['eduMainCode'];
    $eduMainCodeRef = $_POST['eduMainCodeRef'];
    $courseName = $_POST['courseName'];
    $courseFlag = $_POST['courseFlag'];
    $remark = $_POST['remark'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE general_education
    SET EduMainCode=$eduMainCode, EduMainCodeRef=$eduMainCode, CourseName='$courseName', CourseFlag='$courseFlag', Remark='$remark', IsActive=$isActive
    WHERE id=$educationId;
    ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
