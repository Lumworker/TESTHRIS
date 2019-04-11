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
                    <h3 class="content-header-title">บันทึกกรอบอัตราตำแหน่ง</h3>
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
                                                    <i class="la la-code-fork" style="font-size: 300px; color:#DD2C00;"></i>
                                                </div>

                                                <fieldset class="form-group position-relative">

                                                    <div class="row">
                                                        <div class="form-group col-lg-6 ">
                                                            <label id="usernameForm" style=" font-weight:bold; font-size: 15px; color:#0f1733;">โครงสร้าง:</label>
                                                            <select class="select2 form-control block" id="organization">
                                                                <option value="โครงสร้างอัตราทอ.52">โครงสร้างอัตราทอ.52</option>
                                                                <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-lg-6 ">
                                                            <label id="passwordForm" style=" font-weight:bold; font-size: 15px;color:#0f1733;">หน่วยกำลังพล: </label>
                                                            <select class="select2 form-control block" id="group">
                                                                <option value="โครงสร้างอัตราทอ.52">หน่วย</option>
                                                                <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>



                                                <div class="text-right">
                                                    <!-- <button type="submit" class="btn" onclick="search()" style="background-color:#0f1733;color:white;border:white"><i class="la la-search" style="margin-rifgt:8px"></i> -->
                                                    <button type="submit" class="btn"    onclick="window.location.href='./detail.php'" style="background-color:#0f1733;color:white;border:white"><i class="la la-search" style="margin-rifgt:8px"></i> 
                                                        <span style=" font-weight:bold; font-size: 13px;"> ค้นหา</span></button>


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


<script src="../../Controllers/indexOrganizationsProgram"></script>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- footer -->
<?php include '../include/footer.php'; ?> 