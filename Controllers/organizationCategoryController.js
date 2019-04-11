function getOrganizationCategory() {
    $('#OrganizationCategory').DataTable({
        "ajax": {
            url: "../../Model/OrganizationCategory/GetOrganizationCategory.php", // json datasource
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


function insertOrganizationCategory() {
    var OrganizationcategoryFN = $("#OrganizationcategoryFN").val();
    var OrganizationcategoryIN = $("#OrganizationcategoryIN").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(OrganizationcategoryFN + " " + OrganizationcategoryIN + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/OrganizationCategory/InsertOrganizationCategory.php", {
        OrganizationcategoryFN: OrganizationcategoryFN,
        OrganizationcategoryIN: OrganizationcategoryIN,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
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
    var orgCategoryId = getUrlVars()["id"];
    console.log(orgCategoryId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/organizationCategory/GetDataEdit.php",
        data: {
            orgCategoryId: orgCategoryId
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#orgCategoryName").val(data.orgCategoryName);
            $("#orgCategoryAbrrName").val(data.orgCategoryAbbrName);
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
            // console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateOrganizationCategory() {
    var orgCategoryId = $("#id").val();
    var orgCategoryName = $("#orgCategoryName").val();
    var orgCategoryAbbrName = $("#orgCategoryAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/organizationCategory/UpdateOrganizationCategory.php",
        data: {
            orgCategoryId: orgCategoryId,
            orgCategoryName: orgCategoryName,
            orgCategoryAbbrName: orgCategoryAbbrName,
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
            setTimeout("window.open('../organization_category/index.php', '_self');", 2000);
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
function deleteOrganizationCategory(id) {
    // alert(event);
    event.preventDefault();
    var orgCategoryId = id;
    // console.log(orgCategoryId);

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationCategory/DeleteOrganizationCategory.php",
        data: {
            orgCategoryId: orgCategoryId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../organization_category/index.php', '_self');", 2000);
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