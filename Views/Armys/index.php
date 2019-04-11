  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <section>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
            <h3 class="content-header-title">เหล่า</h3>
          </div>
        </div>
        <div class="content-body">
          <!-- Bootstrap 3 table -->
          <section id="bootstrap3">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                      <p class="card-text"></p>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">ช้อมูลทั่วไป</a></li>
                          <li class="breadcrumb-item active" aria-current="page">เหล่า</li>
                        </ol>
                      </nav>
                      <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                      </a>
                      <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                      </a>
                      <table id="armyTable" class="table table-striped table-borderless table-hover bootstrap-3 " style=" width:100%;">
                        <thead>
                          <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                            <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                            <th></th>
                            <th>ลำดับที่</th>
                            <th>รหัส</th>
                            <th>ชื่อ</th>
                            <th>ใช้งาน</th>
                          </tr>
                        </thead>
                        <tbody align="center"></tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ Bootstrap 3 table -->
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <script src="../../Controllers/armyController.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      // console.log("ready");
      change_autorefreshdiv();
      getArmy();
    });

    function change_autorefreshdiv() {
      // $('#prefixPage').addClass('active');
    }

    function toggle(source) {
      var checkboxes = document.querySelectorAll('.checkAll');
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
          checkboxes[i].checked = source.checked;
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



  <!-- footer -->
  <?php include '../include/footer.php'; ?>