<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | SP penyakit Ginjal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>templates/logintemp/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/bootstrap/<?php echo base_url()?>templates/logintemp/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/fonts/font-awesome-4.7.0/<?php echo base_url()?>templates/logintemp/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/animsition/<?php echo base_url()?>templates/logintemp/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/logintemp/css/main.css">
<!--===============================================================================================-->
</head>
<?php $this->load->view('usertemp/header') ?>

<body style="margin-top: 5%;">
	<div class="limiter">
		<div class="container-login100" style="background: #f5f7fa;" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" style="height: 460px;">
				<?php echo form_open('login_user/login'); ?>
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Silahkan Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username" placeholder="Username" required/>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required/>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="submit">
							Masuk
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Lupa
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Belum punya akun ?
						</span>

						<a href="<?php echo site_url() ?>/regist_user" class="txt2 hov1">
							Klik untuk Registrasi
						</a>
					</div>
				</form>
				<?php echo form_close(''); ?>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/animsition/<?php echo base_url()?>templates/logintemp/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/bootstrap/<?php echo base_url()?>templates/logintemp/js/popper.js"></script>
	<script src="<?php echo base_url()?>templates/logintemp/vendor/bootstrap/<?php echo base_url()?>templates/logintemp/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>templates/logintemp/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>templates/logintemp/js/main.js"></script>

</body>
</html>
<?php $this->load->view('usertemp/footer') ?>

