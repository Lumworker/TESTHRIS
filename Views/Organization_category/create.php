  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">

  <style>
      /* ol > li > a {color:#222233;} */
      .toggle.ios,
      .toggle-on.ios,
      .toggle-off.ios {
          border-radius: 20rem;
      }

      .toggle.ios .toggle-handle {
          border-radius: 20rem;
      }
  </style>
  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-md-6 col-12 mb-2">
                  <h3 class="content-header-title">เพิ่มประเภทโครงสร้าง</h3>
                  <div class="row breadcrumbs-top">

                  </div>
              </div>

          </div>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                  <li class="breadcrumb-item"><a href="./index.php">โครงสร้าง</a></li>
                  <li class="breadcrumb-item active" aria-current="page">เพิ่มประเภทโครงสร้าง</li>
              </ol>
          </nav>
          <div class="content-body">
              <!-- Basic form layout section start -->
              <section id="horizontal-form-layouts">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <!-- <div class="card-text">
                        <p>คำโปรย</p>
                    </div> -->
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-md-6 label-control" for="OrganizationcategoryFN">ชื่อเต็มประเภทโครงสร้าง</label>
                                    <div class="col-md-12">
                                        <div class="position-relative ">
                                            <input type="text" id="OrganizationcategoryFN" class="form-control border-primary" placeholder="ชื่อเต็มประเภทโครงสร้าง" name="OrganizationcategoryFN">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-6 label-control" for="OrganizationcategoryIN">ชื่อย่อประเภทโครงสร้าง</label>
                                    <div class="col-md-12">
                                        <div class="position-relative">
                                            <input type="text" id="OrganizationcategoryIN" class="form-control border-primary" placeholder="ชื่อย่อประเภทโครงสร้าง" name="OrganizationcategoryIN">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <label class="col-md-1 label-control" for="userinput3" style="padding-right:0px;">สถานะ</label>
                                    <input id="isActive" type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                </div>
                            </div>
                            <div class="form-actions center" align="center">
                                <!-- <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="confirm-text" onclick="insertOrganizationParts()">บันทึก</button> -->

                                <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="submit" name="submit" onclick="insertOrganizationCategory()">บันทึก</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
              <!-- // Basic form layout section end -->
          </div>
      </div>
  </div>
  <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script>
  $( document ).ready(function() {
    insertOrganizationcategory();
});
  </script> -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <!-- BEGIN VENDOR JS-->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <script src="../../Controllers/OrganizationcategoryController.js"></script>
  <!-- footer -->
  <?php include '../include/footer.php'; ?> 