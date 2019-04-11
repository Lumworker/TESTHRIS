// getData
function getEducation() {
    $('#educationTable').DataTable({
        "ajax": {
            url: "../../Model/Education/GetEducation.php", // json datasource
            dataType: "json",
            type: "post",
            "start": 0,
            "length": 3,
            "serverSide": true,
            "processing": true,
            "paging": true,
            "searching": { "regex": true },
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "pageLength": 10,
            order: [
                [0, "desc"]
            ]
        }
    });
}
// getData

// insertData
function insertEducation() {
    var eduMainCode = $("#eduMainCode").val();
    var eduMainCodeRef = $("#eduMainCodeRef").val();
    var courseName = $("#courseName").val();
    var courseFlag = $("#courseFlag").val();
    var remark = $("#remark").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }


    $.ajax({
        type: "POST",
        url: "../../Model/Education/InsertEducation.php",
        data: {
            eduMainCode: eduMainCode,
            eduMainCodeRef: eduMainCodeRef,
            courseName: courseName,
            courseFlag: courseFlag,
            remark: remark,
            isActive: isActive
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Education/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถเพิ่มข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });
}
// insertData

// ใช้ ตอน update
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ
function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ

// getData จาก db เพื่อนำมาใช้มา input value
function getIdForEdit() {
    var educationId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Education/GetDataEdit.php",
        data: {
            educationId: educationId
        },
        success: function(data) {
            $("#eduMainId").val(data.id);
            $("#eduMainCode").val(data.eduMainCode);
            $("#eduMainCodeRef").val(data.eduMainCodeRef);
            $("#courseName").val(data.courseName);
            $("#courseFlag").val(data.courseFlag);
            $("#remark").val(data.remark);
            // console.log(data.IsActive);
            if (data.IsActive == 0) {
                // $("#isActive").removeAttr('checked');
                $("#isActive").bootstrapToggle('off');
            } else {
                // $('#isActive').prop("checked", true);
                $("#isActive").bootstrapToggle('on');
            }

            // console.log(data);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateEducation() {
    var educationId = $("#educationId").val();
    var eduMainCode = $("#eduMainCode").val();
    var eduMainCodeRef = $("#eduMainCodeRef").val();
    var courseName = $("#courseName").val();
    var courseFlag = $("#courseFlag").val();
    var remark = $("#remark").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    $.ajax({
        type: "POST",
        url: "../../Model/Education/UpdateEducation.php",
        data: {
            educationId: educationId,
            eduMainCode: eduMainCode,
            eduMainCodeRef: eduMainCodeRef,
            courseName: courseName,
            courseFlag: courseFlag,
            remark: remark,
            isActive: isActive
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มแก้ไขข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Education/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถแก้ไขข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });
}
// ใช้ ตอน update

function deleteEducation(id) {
    // alert(event);
    event.preventDefault();
    var educationId = id;
    // console.log(originsId);

    $.ajax({
        type: "POST",
        url: "../../Model/Education/DeleteEducation.php",
        data: {
            educationId: educationId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Education/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถลบข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });

}
// delete