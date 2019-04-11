function getReligions() {
    $('#Religions').DataTable({
        "ajax": {
            url: "../../Model/Religions/GetReligions.php", // json datasource
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

function insertReligions() {

    var religionsName = $("#religionsName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(religionsName + " " + religionsAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Religions/InsertReligions.php", {
        religionsName: religionsName,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Religions/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}

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
    var religionsId = getUrlVars()["id"];
    console.log(religionsId);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Religions/GetDataEdit.php",
        data: {
            religionsId: religionsId
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#religionsName").val(data.religionsName);
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

function UpdateReligions() {
    var religionsId = $("#id").val();
    var religionsName = $("#religionsName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/Religions/UpdateReligions.php",
        data: {
            religionsId: religionsId,
            religionsName: religionsName,
            isActive: isActive
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'แก้ไขข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Religions/index.php', '_self');", 2000);
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

// delete
function deleteReligions(id) {
    // alert(event);
    event.preventDefault();
    var religionsId = id;
    // console.log(originsId);

    $.ajax({
        type: "POST",
        url: "../../Model/Religions/DeleteReligions.php",
        data: {
            religionsId: religionsId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Religions/index.php', '_self');", 2000);
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