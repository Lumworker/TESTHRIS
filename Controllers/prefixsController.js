function getPrefixs() {
    $('#prefixsTable').DataTable({
        "ajax": {
            url: "../../Model/Prefixs/GetPrefixs.php", // json datasource
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
function insertPrefixs() {

    var PrefixsN = $("#PrefixsN").val();
    var PrefixsAbrr = $("#PrefixsAbrr").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(PrefixsN + " " + PrefixsAbrr + " " + isActive);

    $.post("../../Model/Prefixs/Insertprefixs.php", {
        PrefixsN: PrefixsN,
        PrefixsAbrr: PrefixsAbrr,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Prefixs/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
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
    var PrefixsId = getUrlVars()["id"];
    // console.log(PrefixsId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Prefixs/GetDataEdit.php",
        data: {
            PrefixsId: PrefixsId
        },
        success: function(data) {
            $("#prefixsId").val(data.id);
            $("#PrefixsN").val(data.PrefixsN);
            $("#PrefixsAbrr").val(data.PrefixsAbrr);
            // console.log(data);
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

function UpdatePrefixs() {
    var PrefixsId = $("#prefixsId").val();
    var PrefixsN = $("#PrefixsN").val();
    var PrefixsAbrr = $("#PrefixsAbrr").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(PrefixsId + " " + PrefixsN + " " + PrefixsAbrr + " " + isActive);

    $.post("../../Model/Prefixs/UpdatePrefixs.php", {
        PrefixsId: PrefixsId,
        PrefixsN: PrefixsN,
        PrefixsAbrr: PrefixsAbrr,
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
        setTimeout("window.open('../Prefixs/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// ใช้ ตอน update

// delete
function deletePrefixs(id) {
    // alert(event);
    event.preventDefault();
    var PrefixsId = id;
    // console.log(PrefixsId);
    $.post("../../Model/Prefixs/DeletePrefixs.php", {
        PrefixsId: PrefixsId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Prefixs/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}