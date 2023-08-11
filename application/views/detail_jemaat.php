<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<!-- edit-patient24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <title>Gereja - Data Jemaat dan Arsip</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
        @media print {
            /* Menyembunyikan elemen-elemen yang tidak perlu dicetak */
            .header,
            .sidebar,
            .sidebar-overlay,
            .m-t-20 {
                display: none;
            }
            
            /* Menyesuaikan lebar kolom form saat dicetak */
            .col-sm-6 {
                width: 100%;
                margin-bottom: 10px;
            }

            /* Mengatur lebar input form saat dicetak */
            input[type="text"],
            input[type="tel"] {
                width: 100%;
            }
        }
    </style>
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
						<li>
                            <a href="<?php echo base_url();?>kematian"><i class="fa fa-ambulance"></i> <span>Kematian</span></a>
                        </li>
						<li class="active">
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
                        <h4 class="page-title">Update Data Jemaat</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <?php foreach($jemaat as $jm){ ?>
                    <form action="" method="post">
                            <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Id Jemaat <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $jm->id ?>" name="id" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $jm->nama ?>" name="nama" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $jm->gender ?>" name="gender" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $jm->tp_lahir ?>" name="tp_lahir" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $jm->lg_lahir ?>" name="lg_lahir" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" value="<?php echo $jm->alamat ?>" name="alamat" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="tel" class="form-control" value="<?php echo $jm->no_hp ?>" name="no_hp" readonly>
                                    </div>
                                </div>
								<div class="col-sm-6">
            <div class="form-group">
                <label>Tanggal Baptis <span class="text-danger">*</span></label>
                <?php $tanggalBaptis = $this->m_jemaat->getTanggalBaptis($jm->id); ?>
                <?php if ($tanggalBaptis): ?>
                    <input class="form-control" type="text" value="<?php echo $tanggalBaptis; ?>" name="lg_baptis" readonly>
                <?php else: ?>
                    <input class="form-control" type="text" value="Data tidak ada" readonly>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Tanggal Pernikahan <span class="text-danger">*</span></label>
                <?php $tanggalPernikahan = $this->m_jemaat->getTanggalPernikahan($jm->id); ?>
                <?php if ($tanggalPernikahan): ?>
                    <input class="form-control" type="text" value="<?php echo $tanggalPernikahan; ?>" name="lg_pernikahan" readonly>
                <?php else: ?>
                    <input class="form-control" type="text" value="Data tidak ada" readonly>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Tanggal Kematian <span class="text-danger">*</span></label>
                <?php $tanggalKematian = $this->m_jemaat->getTanggalKematian($jm->id); ?>
                <?php if ($tanggalKematian): ?>
                    <input class="form-control" type="text" value="<?php echo $tanggalKematian; ?>" name="lg_kematian" readonly>
                <?php else: ?>
                    <input class="form-control" type="text" value="Data tidak ada" readonly>
                <?php endif; ?>
            </div>
        </div>
                            </div>
                            <div class="m-t-20 text-center">
                            <input type="button" class="btn btn-primary submit-btn" value="Print" onclick="printForm()">
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
        function printForm() {
            // Mencetak form
            window.print();
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
