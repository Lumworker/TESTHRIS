  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <style>
    /* ol > li > a {color:#222233;} */
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
    .toggle.ios .toggle-handle { border-radius: 20rem; }
  </style>

  <section>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
          <h3 class="content-header-title">หน่วยงาน</h3>
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
                        <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้่างอัตรากำลังพล</a></li>
                        <li class="breadcrumb-item"><a href="../home/index.php">โครงสร้าง</a></li>
                        <li class="breadcrumb-item active" aria-current="page">หน่วยงาน</li>
                      </ol>
                    </nav>
                    <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                      <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                    </a>
                    <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                      <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                    </a>
                    <table class="table table-striped table-borderless table-hover bootstrap-3 ">
                      <thead>
                        <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                          <th></th>
                          <th>ลำดับที่</th>
                          <th>รหัส</th>
                          <th>ชื่อ</th>
                          <th >ใช้งาน</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="checkbox" class="checkAll" /></td>
                          <td>
                            <a href="./edit.php"><i class="la la-pencil-square-o" style="color:#0f1733;"></i></a>
                            <a href="./delete.php"><i class="la la-trash-o" style="color:#0f1733;"></i></a>
                          </td>
                          <td>1</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td align="center">
                            <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="checkAll"/></td>
                          <td>
                            <i class="la la-pencil-square-o"></i>
                            <i class="la la-trash-o"></i>
                          </td>
                          <td>2</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td align="center">
                            <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                          </td>
                        </tr>
                      </tbody>
                      <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
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

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
            console.log("ready");
            change_autorefreshdiv();
    });

    function change_autorefreshdiv(){
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

    

  <!-- footer -->
  <?php include '../include/footer.php'; ?>