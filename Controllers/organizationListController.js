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

function addOrganizationList() {}

function editOrganizationList() {}

function deletOrganizationList() {}

// ยังมีในส่วนที่เกี่ยวข้องกับหน้า organizationList ในหน้าอื่นๆ อ้างอื่นจากไฟล์ organizationList