function getOrganizationParts() {
    $('#OrganizationParts').DataTable({
        "ajax": {
            url: "../../Model/OrganizationParts/GetOrganizationParts.php", // json datasource
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



function insertOrganizationParts() {

    var organizationPartName = $("#organizationPartName").val();
    var organizationPartAbbrName = $("#organizationPartAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }


    console.log(organizationPartName + " " + organizationPartAbbrName + " " + isActive);
    // e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationParts/InsertOrganizationParts.php",
        data: {
            organizationPartName: organizationPartName,
            organizationPartAbbrName: organizationPartAbbrName,
            isActive: isActive
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../OrganizationParts/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถเพิ่มข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
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
    var OrganizationPartsId = getUrlVars()["id"];

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/OrganizationParts/GetDataEdit.php",
        data: {
            OrganizationPartsId: OrganizationPartsId
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#organizationPartName").val(data.OrganizationPartsName);
            $("#organizationPartAbbrName").val(data.OrganizationPartsAbbrName);
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

function UpdateOrganizationParts() {
    var OrganizationPartsId = $("#OrganizationPartsId").val();
    var OrganizationPartsName = $("#OrganizationPartsName").val();
    var organizationPartAbbrName = $("#organizationPartAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationParts/UpdateOrganizationParts.php",
        data: {
            OrganizationPartsId: OrganizationPartsId,
            OrganizationPartsName: OrganizationPartsName,
            organizationPartAbbrName: organizationPartAbbrName,
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
            setTimeout("window.open('../OrganizationParts/index.php', '_self');", 2000);
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

function deleteOrganizationParts(id) {
    var organizationPartsId = id;
    event.preventDefault();
    // console.log("organizationPartsId: " + organizationPartsId);

    $.post("../../Model/OrganizationParts/DeleteOrganizationParts.php", {
        organizationPartsId: organizationPartsId
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../organizationparts/index.php', '_self');", 2000);
    }).fail(function(err) {
        //  console.log("delete error");
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}