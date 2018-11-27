<!DOCTYPE html>
<html lang="en">
<head>
	<title>SP penyakit Ginjal</title>
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
	<?php $this->load->view('usertemp/header') ?>

</head>
<body style="margin-top:15%;">
	<div class="limiter">
		<div class="container-login100" style="background: #f5f7fa;" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<?php echo form_open('regist_user/create'); ?>
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Silahkan Registrasi
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid nama is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama_pengguna" placeholder="Nama Lengkap" required/>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid jk is required: ex@abc.xyz">
						<select name="jk" id="jk" style="height: 68px; padding: 0 25px 0 25px; display: block;
						width: 100%;
						background: transparent;
						font-family: OpenSans-Regular;
						font-size: 15px;
						color: #666666;
						line-height: 1.2; outline: none;
						border: none;" required/>
						<option value="">-Jenis Kelamin-</option>
						<option value="P">Perempuan</option>
						<option value="L">Laki-Laki</option>
					</select>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid umur is required: ex@abc.xyz">
					<input class="input100" type="text" name="umur" placeholder="Usia" required/>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid alamat is required: ex@abc.xyz">
					<input class="input100" type="text" name="alamat" placeholder="Alamat" required/ >
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
					<input class="input100" type="text" name="username" placeholder="Username" required/ >
				</div>
				<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password" placeholder="Password" required/>
				</div>

				<div class="container-login100-form-btn m-t-20">
					<button class="login100-form-btn" type="submit" name="submit">
						Daftar
					</button>
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

