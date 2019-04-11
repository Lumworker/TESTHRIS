function getOrganization() {
    $('#Organization').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Organization/GetOrganization.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}



// delete
function deleteOrganizations(id) {
    // alert(event);
    event.preventDefault();
    var orgId = id;
    // console.log(orgId);

    $.ajax({
        type: "POST",
        url: "../../Model/Organization/DeleteOrganization.php",
        data: {
            orgId: orgId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Organizations/index.php', '_self');", 2000);
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