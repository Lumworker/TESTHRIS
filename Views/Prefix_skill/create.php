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

  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/pickers/daterange/daterange.css">

  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">
  <!-- END Page Level CSS-->


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
                      <h3 class="content-header-title">เพิ่มอัตราตำแหน่งในโครงสร้างอัตรา</h3>
                      <div class="row breadcrumbs-top">
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="../home/index.php">ตำแหน่ง</a>
                                  </li>
                                  <li class="breadcrumb-item active">เพิ่มอัตราตำแหน่งในโครงสร้างอัตรา</li>
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
                                      <a style="float:right;"><i class="la la-sitemap"></i> </a>
                                  </div>
                                  <div class="card-body" align="center">
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> เพิ่ม</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="ft-trash-2" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> ลบ</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="ft-copy" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> คัดลอก</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-gavel" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> คำสั่ง</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-print" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;">พิมพ์</span>
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

                      <!-- 1 -->
                      <div class="col-lg-8">
                          <div class="card-header mb-1" style="background-color:#0f1733; color:white; font-weight: bold;font-size: 18px">
                              บันทึก/แก้ไข โครงการส่วนราชการ
                          </div>
                          <div class="card">
                              <div class="card-header" style="background-color:#e1e8fc;">
                                  <h5 class="card-title" style="color:#0f1733;">ส่วนที่ 1 รายละเอียดข้อมูล</h5>
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                      <div class="card-content collpase show">
                                          <div class="card-body">
                                              <form class="form form-horizontal">
                                                  <div class="form-body">
                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <label class="col-md-12 label-control" for="code">รหัสโครงการส่วนราชการ</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="code" class="form-control border-primary" placeholder="รหัสโครงการส่วนราชการ" name="code">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-5">
                                                              <label class="col-md-12 label-control" for="orgListCode">ประเภทโครงสร้าง</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="orgListCode" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="โครงสร้างอัตราเฉพาะกิจ">โครงสร้างอัตราเฉพาะกิจ</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-1">
                                                                  <a href="../organization_types/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgCode">รหัสสังกัดและหน่วย</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="orgCode" class="form-control border-primary" placeholder="รหัสสังกัดและหน่วย" name="orgCode">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="numberTree">ลำดับสังกัด/หน่วยใน Tree</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="numberTree" class="form-control border-primary" placeholder="ลำดับสังกัด/หน่วยใน Tree" name="numberTree">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-5 mt-1">
                                                              <label class="col-md-12 label-control" for="orgPartName">ชื่อส่วนราชการ</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="orgPartName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">เลือกส่วนราชการ</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-1">
                                                                  <a href="../Organization_parts/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-5 mt-1 ml-5">
                                                              <label class="col-md-12 label-control" for="orgName">ชื่อสังกัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="orgName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">เลือกสังกัด</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-1">
                                                                  <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="dropdown1">ฐานะของหน่วย/สังกัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="dropdown1" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">เลือกฐานะของหน่วย/สังกัด</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-5 mt-1">
                                                              <label class="col-md-12 label-control" for="divisionsName">ชื่อหน่วย</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="divisionsName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">เลือกหน่วย</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-1">
                                                                  <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="input1">ชื่อย่อ</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="inpu1" class="form-control border-primary" placeholder="ศปร." name="input1">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="input2">ชื่อหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="input2" class="form-control border-primary" placeholder="ชื่อหน่วย/สังกัด" name="input2">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="input3">ชื่อย่อหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="input3" class="form-control border-primary" placeholder="ชื่อย่อหน่วย/สังกัด" name="input3">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="input4">ชื่อกึ่งย่อหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" id="input4" class="form-control border-primary" placeholder="ชื่อกึ่งย่อหน่วย/สังกัด" name="input4">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="provincesName">จังหวัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="provincesName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">จังหวัด</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="districtsName">อำเภอ</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="districtsName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">อำเภอ</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- 1 -->
                          <div class="card">
                              <div class="card-header" style="background-color:#e1e8fc;">
                                  <h5 class="card-title" style="color:#0f1733;">ส่วนที่ 2 การใช้งาน</h5>
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                      <div class="tab-content px-1 pt-1">
                                          <div role="tabpanel" class="tab-pane active" id="limit" aria-expanded="true" aria-labelledby="base-limit">
                                              <div class="row">
                                                  <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2  pl-2 p-0">
                                                      <div class="row my-2">
                                                          <div class="col-4">
                                                              <h5 class="text-bold-500 mb-0">ใช้งาน</h5>
                                                          </div>
                                                      </div>
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">คำสั่ง</label>
                                                                      <div class="col-md-10" style="float:left;">
                                                                          <select class="select2 form-control block" id="orgName" style="width: 100%;">
                                                                              <!-- border-color: #8c93ee !important; -->
                                                                              <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                              <option value="">เลือกคำสั่ง</option>
                                                                              <option value="">คำสั่ง2</option>
                                                                              <!-- <option value="HI">Hawaii</option> -->
                                                                              <!-- </optgroup> -->
                                                                          </select>
                                                                      </div>
                                                                      <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">เลขที่คำสั่ง</label>
                                                                      <div class="col-md-12">
                                                                          <div class="position-relative">
                                                                              <input type="text" id="code" class="form-control border-primary" placeholder="เลขที่คำสั่ง" name="code">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">ลง :</label>
                                                                          <div class="input-group col-md-12" >
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">มีผลตั่งแต่ :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>

                                                              </div>

                                                          </div>
                                                      </form>
                                                  </div>

                                                  <!-- 2 -->
                                                  <div class="col-12 col-xl-6 pl-2 p-0">
                                                      <div class="row my-2">
                                                          <div class="col-4">
                                                              <h5 class="text-bold-500 mb-0">ยกเลิก</h5>
                                                          </div>
                                                      </div>
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">คำสั่ง</label>
                                                                      <div class="col-md-10" style="float:left;">
                                                                          <select class="select2 form-control block" id="orgName" style="width: 100%;">
                                                                              <!-- border-color: #8c93ee !important; -->
                                                                              <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                              <option value="">เลือกคำสั่ง</option>
                                                                              <option value="">คำสั่ง2</option>
                                                                              <!-- <option value="HI">Hawaii</option> -->
                                                                              <!-- </optgroup> -->
                                                                          </select>
                                                                      </div>
                                                                      <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">เลขที่คำสั่ง</label>
                                                                      <div class="col-md-12">
                                                                          <div class="position-relative">
                                                                              <input type="text" id="code" class="form-control border-primary" placeholder="เลขที่คำสั่ง" name="code">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">ลง :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">มีผลตั่งแต่ :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                              <hr>
                                              <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-actions center" align="center">
                              <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                              <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="confirm-text">บันทึก</button>
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

  <!-- date -->
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>

  <!-- select2 -->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

  <!-- END PAGE LEVEL JS-->
  </body>

  </html> 