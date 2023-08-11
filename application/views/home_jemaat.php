<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Gereja - Data Jemaat dan Arsip</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <style>
   .container {
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
     text-align: center;
     margin-top: 50px; /* Sesuaikan Keinginan Yekann */
   }

   .container img {
     width: 200px;
     height: auto;
   }
</style>

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="<?php echo base_url();?>" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>GBI</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><?php echo $this->session->userdata("nama"); ?></span>
                    </a>
					<div class="dropdown-menu">
						
						<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    
                    <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="<?php echo base_url();?>home_jemaat"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
		
						<li>
							<a href="akses_jemaat"><i class="fa fa-users"></i> <span>Jemaat</span></a>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
           <div class="content">
	
           <div class="container">
        <h1>Selamat Datang</h1>
        <img src="./assets/img/gereja.png" alt="GBI">
    </div>
       


            </div>
        </div> 
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>