
<!DOCTYPE html>
<html lang="en">
<head>
<title>SP Penyakit Ginjal</title>
<link rel="icon" href="<?php echo base_url()?>templates/niceadmin/img/1.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url()?>templates/caremed/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/styles/responsive.css">
<script type='text/javascript' src='<?php echo base_url();?>asset/assets/js/jquery-1.8.2.min.js'></script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar" style="background: #f5f7fa;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_item"><a href="#" style="color: #283290;">FAQ</a></div>
							<div class="top_bar_item"><a href="#" style="color: #283290;">Request an Appointment</a></div>
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto" style="background: #20D34A;">For Emergencies: +563 47558 623</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="<?php echo site_url() ?>dashboard/index">Beranda</a></li>
									<li><a href="<?php echo site_url() ?>dashboard/informasi">Informasi</a></li>
									<li><a href="<?php echo site_url() ?>dashboard/tentang">Tentang</a></li>
									<li><a href="<?php echo site_url() ?>dashboard/diagnosa">Diagnosa</a></li>
									<!-- <li><a href="<?php echo site_url() ?>Hitung">Diagnosa DS</a></li> -->
									<?php 
									if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
									?>
									<li><a href="<?php echo site_url() ?>/login_user/logout"><i class="fa fa-user"></i> Hai, <?php echo $this->session->userdata('nama_pengguna') ?>, Logout </a></li>
									<?php } else{ ?>
									<li><a href="<?php echo site_url() ?>/login_user"><i class="fa fa-user"></i> Login </a></li>
									<?php } ?>
						    	</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">SP<span>Ginjal</span></div>
										<div class="logo_box">+</div>
									</div>
									<div class="logo_sub">Sistem Pakar <b>Penyakit<br>Ginjal</b></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/dashboard/index">Beranda</a></li>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/dashboard/informasi">Informasi</a></li>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/dashboard/tentang">Tentang</a></li>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/dashboard/diagnosa">Diagnosa CF</a></li>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/hitung">Diagnosa DS</a></li>
					<?php 
					if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
					?>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/login_user/logout"><i class="fa fa-user"></i> Hai, <?php echo $this->session->userdata('nama_pengguna') ?>, Logout </a></li>
					<?php } else{ ?>
					<li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/login_user"><i class="fa fa-user"></i> Login </a></li>
					<?php } ?>
				</ul>
			</div>
			<!-- <div class="menu_extra">
				<div class="menu_appointment"><a href="#">Request an Appointment</a></div>
				<div class="menu_emergencies">For Emergencies: +563 47558 623</div>
			</div> -->
		</div>
	</div>