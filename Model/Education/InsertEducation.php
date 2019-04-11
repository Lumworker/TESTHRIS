<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    //     // $originName = "ไทย";

    // $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM general_education; ";

    // echo $sqlInsertSeqNoAndCode;

    // $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // $idNew = "";
    // while ($row = sqlsrv_fetch_array($querySelect)) {
    //     $id = $row['maxid'];
    //     $idNew = $id+1;
    // }

    // if ($querySelect) {
    //     echo "บันทึกสำเร็จ";
    // } else {
    //     echo "บันทึกไม่ได้";
    // }

    $eduMainCode = $_POST['eduMainCode'];
    $eduMainCodeRef = $_POST['eduMainCodeRef'];
    $courseName = $_POST['courseName'];
    $courseFlag = $_POST['courseFlag'];
    $remark = $_POST['remark'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " INSERT INTO general_education
    (EduMainCode, EduMainCodeRef, CourseName, CourseFlag, Remark, IsActive)
    VALUES($eduMainCode, $eduMainCodeRef, '$courseName', '$courseFlag', '$remark', $isActive);
     ";
    // echo $sql;

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);