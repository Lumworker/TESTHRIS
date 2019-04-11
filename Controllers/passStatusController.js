function getPassStatus() {
    $('#passStatusTable').DataTable({
        "ajax": {
            url: "../../Model/PassStatus/GetPassStatus.php", // json datasource
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

// insertData
function insertPassStatus() {
    var passCode = $("#passCode").val();
    var passName = $("#passName").val();
    var passAbbrName = $("#passAbbrName").val();
    var isBelongToRtaf = $("#isBelongToRtaf").val();
    var flagSenior = $("#flagSenior").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }


    $.ajax({
        type: "POST",
        url: "../../Model/PassStatus/InsertPassStatus.php",
        data: {
            passCode: passCode,
            passName: passName,
            passAbbrName: passAbbrName,
            isBelongToRtaf: isBelongToRtaf,
            flagSenior: flagSenior,
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
            setTimeout("window.open('../Pass_Status/index.php', '_self');", 2000);
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
    var passStatusId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/PassStatus/GetDataEdit.php",
        data: {
            passStatusId: passStatusId
        },
        success: function(data) {
            $("#passStatusId").val(data.id);
            $("#passCode").val(data.passCode);
            $("#passName").val(data.passName);
            $("#passAbbrName").val(data.passAbbrName);
            $("#isBelongToRtaf").val(data.isBelongToRtaf)
            $("#flagSenior").val(data.flagSenior);
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

function UpdatePassStatus() {
    var passStatusId = $("#passStatusId").val();
    var passCode = $("#passCode").val();
    var passName = $("#passName").val();
    var passAbbrName = $("#passAbbrName").val();
    var isBelongToRtaf = $("#isBelongToRtaf").val();
    var flagSenior = $("#flagSenior").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(passTypeId + " " + passTypeName + " " + passTypeAbbrName + " " + isActive);

    $.post("../../Model/PassStatus/UpdatePassStatus.php", {
        passStatusId: passStatusId,
        passCode: passCode,
        passName: passName,
        passAbbrName: passAbbrName,
        isBelongToRtaf: isBelongToRtaf,
        flagSenior: flagSenior,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Pass_Status/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}

// delete
function deletePassStatus(id) {
    // alert(event);
    event.preventDefault();
    var passStatusId = id;
    // console.log(PrefixsId);
    $.post("../../Model/PassStatus/DeletePassStatus.php", {
        passStatusId: passStatusId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Pass_Status/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}