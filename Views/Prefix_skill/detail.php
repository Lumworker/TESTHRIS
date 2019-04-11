  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- BEGIN VENDOR CSS-->
  <!--   
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css"> -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/ui/dragula.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN MODERN CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css"> -->
  <!-- END MODERN CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/switch.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/checkboxes-radios.css">
  <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"> -->
  <!-- END Page Level CSS-->


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
  <!-- END Custom CSS-->
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
  <style>
      .table td {
          padding: -0.75rem 2rem;
      }
  </style>
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">อัตราตำแหน่งในโครงสร้างอัตรา</h3>
                      <div class="row breadcrumbs-top">
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="../home/index.php">ตำแหน่ง</a>
                                  </li>
                                  <li class="breadcrumb-item active">อัตราตำแหน่งในโครงสร้างอัตรา</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="content-body">
                              <!-- Description -->
                              <div class="sidebar-content card d-none d-lg-block">
                                  <div class="card-header" style="background-color:#0f1733; color:white; font-weight: bold;font-size: 18px">
                                      โครงการส่วนราชการ
                                      <i style="float:right;"><i class="la la-sitemap"></i> </i>
                                  </div>
                                  <div class="card-body" align="center">
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;margin-top:3px;" ;>
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> เพิ่ม</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;margin-top:3px;" ;>
                                          <span class="ft-trash-2" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> ลบ</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;margin-top:3px;" ;>
                                          <span class="ft-copy" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> คัดลอก</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;margin-top:3px;" ;>
                                          <span class="la la-gavel" style="color:white; font-weight: bold;font-size: 13px;"> คำสั่ง</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;margin-top:3px;" ;>
                                          <span class="la la-print" style="color:white; font-weight: bold;font-size: 13px;">พิมพ์</span>
                                      </a>



                                      <div class="card-content">
                                          <div class="card-body skin-flat">
                                              <!-- <------------------------? -->
                                              <style>
                                                  .vl {
                                                      border-left: 8px solid #0f1733;
                                                      height: 30px;
                                                      float: left;
                                                      padding-right: 4px;
                                                  }
                                              </style>


                                              <ul class="list-group">
                                                  <li class="list-group-item">
                                                      <s class="vl"></s>
                                                      <span style="font-weight: bold;font-size: 12px;"> กองทัพอากาศ</span>
                                                  </li>
                                              </ul>
                                              <ul class="list-group" id="list-group-tags" align="left">

                                                  <a style="margin-left: 15px; ">
                                                      <li class="list-group-item">
                                                          <s class="vl"></s> <input type="checkbox" value="01">
                                                          <span style="font-weight: bold;font-size: 12px;"> กรมกำลังพล ทหารอากาศ</span>
                                                      </li>
                                                  </a>

                                                  <a style="margin-left: 15px; folat">
                                                      <li class="list-group-item">
                                                          <s class="vl"></s> <input type="checkbox" value="01">
                                                          <span style="font-weight: bold;font-size: 12px;"> ส่วนบังคับบัญชา</span>
                                                      </li>
                                                  </a>

                                                  <a style="margin-left: 15px;">
                                                      <li class="list-group-item">
                                                          <s class="vl"></s> <input type="checkbox" value="01">
                                                          <span style="font-weight: bold;font-size: 12px;"> แผนกฎหมาย</span>
                                                      </li>
                                                  </a>

                                                  <a style="margin-left: 15px;">
                                                      <li class="list-group-item">
                                                          <s class="vl"></s> <input type="checkbox" value="01">
                                                          <span style="font-weight: bold;font-size: 12px;"> สำนักนโยบายบริหารกำลังพล</span>
                                                      </li>
                                                  </a>

                                              </ul>
                                              <!-- <div class="skin-flat">
                                                      divนี้ทำให้ เป็นcheckbox css
                                              </div> -->
                                              <!-- ----------------------------- -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- ---------------------- -->
                      <!-- /Ratings sample -->

                      <div class="col-lg-8">
                          <section id="description" class="card">
                              <div class="card-content">
                                  <div class="card-body">
                                      <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                      </a>
                                      <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                          <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                      </a>
                                      <table class="table table-striped  table-borderless table-hover bootstrap-3 table-">
                                          <thead>

                                              <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                  <th> <a class="skin-flat"><input type="checkbox" class="checkAll" onclick="toggle(this);" /> </a></th>
                                                  <th></th>
                                                  <th>ลำดับที่</th>
                                                  <th>รหัส</th>
                                                  <th>ชื่อ</th>
                                                  <th>ใช้งาน</th>

                                              </tr>
                                          </thead>
                                          <tbody align="center ">
                                              <tr>
                                                  <td><a class="skin-flat"><input type="checkbox" class="checkAll" /></a></td>
                                                  <td style="color:#0f1733"><a><i class="la la-file-text"></i></a>
                                                      <a href="./detail.php" style="color:#0f1733;"><i class="la a la-money"></i></a>
                                                      <a class="dropdown">
                                                          <a data-toggle="dropdown">
                                                              <i class="la la-ellipsis-v"></i></a>
                                                          <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="#"><i class="la la-edit"></i> แก้ไข</a>
                                                              <a class="dropdown-item" href="#"><i class="la la-trash-o"></i>ลบ</a>
                                                          </div>
                                                      </a>

                                                  </td>
                                                  <td>1</td>
                                                  <td>Edinburgh</td>
                                                  <td>61</td>
                                                  <td align="center">
                                                      <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td><a class="skin-flat"><input type="checkbox" class="checkAll" /></a></td>
                                                  <td style="color:#0f1733"><a><i class="la la-file-text"></i></a>
                                                      <a href="./detail.php" style="color:#0f1733;"><i class="la a la-money"></i></a>
                                                      <a class="dropdown">
                                                          <a data-toggle="dropdown">
                                                              <i class="la la-ellipsis-v"></i></a>
                                                          <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="#"><i class="la la-edit"></i> แก้ไข</a>
                                                              <a class="dropdown-item" href="#"><i class="la la-trash-o"></i>ลบ</a>
                                                          </div>
                                                      </a>

                                                  </td>
                                                  <td>2</td>
                                                  <td>Tokyo</td>
                                                  <td>63</td>
                                                  <td align="center">
                                                      <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!--/ PUG Code -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>


  <!-- BEGIN VENDOR JS -->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->

  <script>
      $(document).ready(function() {
          $('.dropdown-submenu a.test').on("click", function(e) {
              $(this).next('ul').toggle();
              e.stopPropagation();
              e.preventDefault();
          });
      });
  </script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/drag-drop.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/dropdowns/dropdowns.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->


  <!-- ///////////////////////////////footer/////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
      </p>
  </footer>



  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/tables/datatables/datatable-styling.js" type="text/javascript"></script>

  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>

  <!-- END PAGE LEVEL JS-->
  </body>

  </html> 