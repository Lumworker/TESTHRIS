// getData
function getOrigins() {
    $('#Origins').DataTable({
        "ajax": {
            url: "../../Model/Origins/GetOrigins.php", // json datasource
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
function insertOrigins() {
    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(originName + "" + originAbbrName + "" + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/Origins/InsertOrigins.php",
        data: {
            originName: originName,
            originAbbrName: originAbbrName,
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
            setTimeout("window.open('../Origins/index.php', '_self');", 2000);
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
    var originsId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Origins/GetDataEdit.php",
        data: {
            originsId: originsId
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#originName").val(data.originName);
            $("#originAbbrName").val(data.originAbbrName);
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


function UpdateOrigins() {
    var originsId = $("#id").val();
    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/Origins/UpdateOrigins.php",
        data: {
            originsId: originsId,
            originName: originName,
            originAbbrName: originAbbrName,
            isActive: isActive
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มแก้ไขข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Origins/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
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
function deleteOrigins(id) {
    // alert(event);
    event.preventDefault();
    var originsId = id;
    // console.log(originsId);

    $.ajax({
        type: "POST",
        url: "../../Model/Origins/DeleteOrigins.php",
        data: {
            originsId: originsId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Origins/index.php', '_self');", 2000);
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