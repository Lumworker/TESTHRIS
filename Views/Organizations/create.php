  <!-- header -->
  <?php include '../include/header.php'; ?>
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/pickers/daterange/daterange.css">


  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">

  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/checkboxes-radios.css">

  <!-- menu -->
  <?php include '../include/menu.php'; ?>


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
                  <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                  <h3 class="content-header-title">แก้ไขอัตราตำแหน่งในโครงสร้างอัตรา</h3>
                  <div class="row breadcrumbs-top">

                  </div>
              </div>

          </div>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                  <li class="breadcrumb-item"><a href="./index.php">โครงสร้าง</a></li>
                  <li class="breadcrumb-item active" aria-current="page">แก้ไขอัตราตำแหน่งในโครงสร้างอัตรา</li>
              </ol>
          </nav>
          <div class="content-body">
              <!-- Basic form layout section start -->
              <section id="horizontal-form-layouts">

                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="form-section" id="horz-layout-colored-controls">สร้างหน่วยงาน</h4>
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
                                                      <label class="col-md-6 label-control" for="userinput1">ประเภทโครงสร้าง</label>
                                                      <div class="col-md-12">
                                                          <select class="select2 form-control block" id="responsive_single" style="width: 100%;">
                                                              <!-- border-color: #8c93ee !important; -->
                                                              <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                              <option value="โครงสร้างอัตราเฉพาะกิจ">โครงสร้างอัตราเฉพาะกิจ</option>
                                                              <!-- <option value="HI">Hawaii</option> -->
                                                              <!-- </optgroup> -->
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <label class="col-md-4 label-control" for="userinput1">รหัสโครงสร้าง</label>
                                                      <div class="col-md-12">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="userinput1" class="form-control border-primary" placeholder="ชื่อตัวย่อ" name="lastname">
                                                              <div class="form-control-position">
                                                                  <i class="ft-message-square"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <br>
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <label class="col-md-4 label-control" for="userinput2">ชื่อหน่วยงาน</label>

                                                      <div class="col-md-12">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="timesheetinput1" class="form-control border-primary" placeholder="ชื่อหน่วยงาน" name="employeename">
                                                              <div class="form-control-position">
                                                                  <i class="ft-user"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>

                                              <div class="row mt-1">
                                                  <div class="col-md-6">
                                                      <label class="col-md-6 label-control" for="userinput1">วันที่เริ่มต้น</label>
                                                      <div class="input-group col-md-12">
                                                          <input type='text' class="form-control pickadate-events" placeholder=" _/_/_ " />
                                                          <div class="input-group-append">
                                                              <span class="input-group-text">
                                                                  <span class="la la-calendar-o"></span>
                                                              </span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <label class="col-md-6 label-control" for="userinput2">วันที่สิ้นสุด</label>
                                                      <div class="input-group col-md-12">
                                                          <input type='text' class="form-control pickadate-events" placeholder=" _/_/_ " />
                                                          <div class="input-group-append">
                                                              <span class="input-group-text">
                                                                  <span class="la la-calendar-o"></span>
                                                              </span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-sm-12 mt-1">
                                              <fieldset class="checkboxsas">
                                                  <label>
                                                      <input type="checkbox" value="">&nbsp;โครงสร้างของ ทอ.
                                                  </label>
                                              </fieldset>
                                              <fieldset class="checkbox">
                                                  <label>
                                                      <input type="checkbox" value="">&nbsp;ได้รับวันทวีคูณ
                                                  </label>
                                              </fieldset>
                                              <fieldset class="checkbox">
                                                  <label>
                                                      <input type="checkbox" value="">&nbsp;โครงสร้างปัจจุบัน
                                                  </label>
                                              </fieldset>
                                              <div>
                                                  <label class="label-control" for="userinput3">สถานะ</label>
                                                  <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                              </div>
                                          </div>

                                          <div class="form-actions center" align="center">
                                              <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1">ยกเลิก</button>
                                              <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="type-success">บันทึก</button>
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
  <!-- BEGIN VENDOR JS-->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- select2 -->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

  <!-- date -->
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <!-- checkbox -->
  <script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>

  <!-- footer -->
  <?php include '../include/footer.php'; ?> 