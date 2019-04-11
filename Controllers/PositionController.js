function getPosition() {
    $('#Position').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Position/GetPosition.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}
function addPositions(){}
function editPositions(){}
function deletPositions(){}

// ยังมีในส่วนที่เกี่ยวข้องกับหน้า OrganizationsPosition ในหน้าอื่นๆ อ้างอื่นจากไฟล์ OrganizationsPosition