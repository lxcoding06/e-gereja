<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="<?php echo base_url();?>image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <title>Gereja - Data Jemaat dan Arsip</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index" class="logo">
					<img src="<?php echo base_url();?>assets/img/logo.png" width="35" height="35" alt=""> <span>GBI</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?php echo base_url();?>assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span><?php echo $this->session->userdata("nama"); ?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="active">
                            <a href="<?php echo base_url();?>kematian"><i class="fa fa-ambulance"></i> <span>Kematian</span></a>
                        </li>
						<li>
							<a href="<?php echo base_url();?>jemaat"><i class="fa fa-users"></i> <span>Jemaat</span></a>
						</li>
						<li>
							<a href="<?php echo base_url();?>pernikahan"><i class="fa fa-venus-mars"></i> <span>Pernikahan</span></a>
						</li>
                        <li>
							<a href="<?php echo base_url();?>baptis"><i class="fa fa-heart"></i> <span>Baptis</span></a>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Data Kematian</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <?php foreach($kematian as $kt){ ?>
                    <form action="<?php echo base_url(). 'Update_Kematian/update'; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $kt->id ?>">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="nama" value="<?php echo $kt->nama ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="tp_lahir" value="<?php echo $kt->tp_lahir ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="lg_lahir" value="<?php echo $kt->lg_lahir ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Agama <span class="text-danger">*</span></label>
                                        <select class="form-control select" name="agama" value="<?php echo $kt->agama ?>">
                                            <option selected value="Katolik">Katolik</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $kt->alamat ?>">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Kematian</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="lg_kematian" value="<?php echo $kt->lg_kematian ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input class="form-control" type="time" name="waktu_kematian" value="<?php echo $kt->waktu_kematian ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
                                    <label>Bukti Kematian</label>
        <div class="profile-upload">
            <div class="upload-input">
                <input type="file" class="form-control" name="bukti_kematian" id="bukti_kematian" onchange="previewImage()">
                <?php if ($kt && $kt->bukti_kematian): ?>
                    <img src="<?php echo base_url('./uploads/') . $kt->bukti_kematian; ?>" alt="Bukti Kematian" style="max-width: 350px;">
                    <input type="hidden" name="existing_bukti_kematian" value="<?php echo $kt->bukti_kematian; ?>">
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?>
            </div>
										</div>
									</div>
                                </div>
                                <div class="col-sm-6">
                                        <label>Petugas</label>
                                        <input type="text" class="form-control" name="petugas" value="<?php echo $kt->petugas ?>">
                                    </div>
                            </div>
                            <div class="m-t-20 text-center">
                            <input type="submit" class="btn btn-primary submit-btn" value="Simpan">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script>
        function previewImage() {
    var fileInput = document.getElementById('bukti_kematian');
    var preview = document.getElementById('preview');

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.setAttribute('src', e.target.result);
            preview.style.display = 'block';
        }

        reader.readAsDataURL(fileInput.files[0]);
    } else {
        preview.style.display = 'none';
    }
}
</script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- edit-patient24:07-->
</html>
