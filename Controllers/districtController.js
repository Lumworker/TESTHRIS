// getData
function getDistricts() {
    $('#districtTable').DataTable({
        "ajax": {
            url: "../../Model/Districts/GetDistricts.php", // json datasource
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
function insertDistricts() {
    var districtsName = $("#districtsName").val();
    var districtsAbbrName = $("#districtsAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(districtsName + "" + districtsAbrrName + "" + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/Districts/InsertDistricts.php",
        data: {
            districtsName: districtsName,
            districtsAbbrName: districtsAbbrName,
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
            // setTimeout("window.open('../districts/index.php', '_self');", 2000);
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
    var districtsId = getUrlVars()["id"];
    // console.log(districtsId);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Districts/GetDataEdit.php",
        data: {
            districtsId: districtsId
        },
        success: function(data) {
            $("#districtsId").val(data.id);
            $("#districtsName").val(data.districtsName);
            $("#districtsAbbrName").val(data.districtsAbbrName);
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

function updateDistricts() {
    var districtsId = $("#districtsId").val();
    var districtsName = $("#districtsName").val();
    var districtsAbbrName = $("#districtsAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(districtsId + "" + districtsName + "" + districtsAbbrName + "" + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/Districts/UpdateDistricts.php",
        data: {
            districtsId: districtsId,
            districtsName: districtsName,
            districtsAbbrName: districtsAbbrName,
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
            setTimeout("window.open('../districts/index.php', '_self');", 2000);
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

function deleteDistricts(id) {
    // alert(event);
    event.preventDefault();
    var districtsId = id;
    // console.log(districtsId);

    $.ajax({
        type: "POST",
        url: "../../Model/Districts/DeleteDistricts.php",
        data: {
            districtsId: oridistrictsIdginsId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../degrees/index.php', '_self');", 2000);
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