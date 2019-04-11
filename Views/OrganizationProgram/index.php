<!-- connection -->
<?php require_once "../../config.php"; ?>

<!-- header -->
<?php include '../include/header.php'; ?>

<!-- menu -->
<?php include '../include/menu.php'; ?>

<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
<!-- END Custom CSS-->

<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->



<script src="../../Controllers/OrganizationProgramController.js"></script>

<section>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                    <h3 class="content-header-title">โปรแกรมจัดการโครงสร้าง</h3>
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
                                        <div class="col-12 d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6 col-10 ">
                                                <div class="text-center">
                                                    <i class="la la-code-fork" style="font-size: 300px; color:#0f1733;"></i>
                                                </div>

                                                <fieldset class="form-group position-relative">
                                                    <div class="row">

                                                        <div class="form-group col-md-12 mt-1">
                                                            <label id="orgType" style=" font-weight:bold; font-size: 15px; color:#0f1733;">โครงสร้าง:</label>

                                                            <select name="orgTypeList" id="orgTypeList" class="select2 form-control">
                                                                <option value="21">อัตรา ทอ. 52</option>
                                                                <?php
                                                                $sql = " SELECT id, organization_type_name FROM organization_type; ";
                                                                $result = sqlsrv_query($conn, $sql);
                                                                while ($row = sqlsrv_fetch_array($result)) {
                                                                    echo "<option value='" . $row['id'] . "'>" . $row['organization_type_name'] . "</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

                                                        <script type="text/javascript">
                                                            $(document).ready(function() {
                                                                // console.log("ready");
                                                                var orgTypeId = $('#orgTypeList :selected').val();
                                                                // alert(a);
                                                                $("#orgTypeId").val(orgTypeId);
                                                                console.log(orgTypeId);

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "./getOrgListDropDown.php",
                                                                    data: {
                                                                        orgTypeId: orgTypeId
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data);
                                                                    },
                                                                    error: function(error) {
                                                                        console.log(error);
                                                                    }
                                                                });


                                                            });

                                                            $(function() {
                                                                $('#orgTypeList').change(function() {
                                                                    var values = $('#orgTypeList :selected').val();
                                                                    // alert(values);
                                                                    $("#orgListId").val(values);
                                                                });
                                                            });

                                                            var orgTypeId = $("#orgTypeId").val();
                                                        </script>

                                                        <div class="form-group col-md-12">
                                                            <label id="orgList" style=" font-weight:bold; font-size: 15px; color:#0f1733;">ฐานะหน่วย:</label>
                                                            <input type="hidden" id="orgTypeId" name="orgTypeId">
                                                           

                                                            <?php 
                                                            require_once "./getOrgListDropDown.php";
                                                            getOrgList();
                                                            ?>

                                                            
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <div class="text-right">
                                                    <!-- <button type="submit" class="btn" onclick="search()" style="background-color:#0f1733;color:white;border:white"><i class="la la-search" style="margin-rifgt:8px"></i> -->
                                                    <a href="./detail.php">
                                                        <button type="submit" class="btn" style="background-color:#0f1733;color:white;border:white"><i class="la la-search" style="margin-rifgt:8px"></i>
                                                            <span style=" font-weight:bold; font-size: 13px;"> ค้นหา</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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

<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
<script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

</html>