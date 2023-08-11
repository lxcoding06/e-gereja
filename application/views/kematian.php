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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="<?php echo base_url();?>" class="logo">
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
                            <a href="kematian"><i class="fa fa-ambulance"></i> <span>Kematian</span></a>
                        </li>
						<li>
							<a href="jemaat"><i class="fa fa-users"></i> <span>Jemaat</span></a>
						</li>
						<li>
							<a href="pernikahan"><i class="fa fa-venus-mars"></i> <span>Pernikahan</span></a>
						</li>
                        <li>
							<a href="baptis"><i class="fa fa-heart"></i> <span>Baptis</span></a>
						</li>					
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Kematian</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="data_kematian" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
				<div class="row">
                <div class="col-sm-4 col-3">
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Cari Data">
            </div>
                </div>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Tanggal Lahir</th>
										<th>Agama</th>
										<th>Alamat</th>
										<th>Tanggal Kematian</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php 
		                        foreach($kematian as $kt){ ?>
									<tr>
										<td><?php echo $kt->nama ?></td>
										<td><?php echo $kt->lg_lahir ?></td>
										<td><?php echo $kt->agama ?></td>
										<td><?php echo $kt->alamat ?></td>
                                        <td><?php echo $kt->lg_kematian ?></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?php echo base_url(). 'update_kematian/edit/'.$kt->id,''; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="<?php echo base_url(). 'Data_Kematian/hapus/'.$kt->id,''; ?>" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
                                    
                                    <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script>
$(document).ready(function() {
    $('#search').keyup(function() {
        var value = $(this).val().toLowerCase();
        $('tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
</script>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>