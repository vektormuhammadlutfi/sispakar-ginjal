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
	<div class="container" style="padding-left: 25%;">
		<div class="col-md-8" >
			<div class="panel-body">
                <div class="form" style="padding-top: 10px;">
				<?php echo form_open('regist_user/create'); ?>
				<form class="form-validate form-horizontal">
					<h3 class="form-signin-heading">
						<center><span class="fa fa-user"></span> Silahkan Registrasi</center>
					</h3>
					<div class="form-group" style="padding-top: 10px;">
						<h5><span style="color: red;">*</span> Nama Lengkap : </h5>
						<input class="form-control" style="color: grey;" type="text" name="nama_pengguna" placeholder="Nama Anda" required/>
					</div>
					<div class="form-group">
						<h5><span style="color: red;">*</span> Jenis Kelamin : </h5>
						<select name="jk" id="jk" class="form-control" style="color: grey;" required/>
							<option value="">Jenis Kelamin</option>
							<option value="P">Perempuan</option>
							<option value="L">Laki-Laki</option>
						</select>
					</div>
					<div class="form-group">
						<h5><span style="color: red;">*</span> Tanggal Lahir : </h5>
						<input class="form-control" style="color: grey;" type="date" name="umur" required/>
					</div>
					<div class="form-group">
						<h5><span style="color: red;">*</span> Alamat : </h5>
						<input class="form-control" style="color: grey;" type="text" name="alamat" placeholder="Alamat" required/ >
					</div>
					<div class="form-group" >
						<h5><span style="color: red;">*</span> Email : </h5>
						<input class="form-control" style="color: grey;" type="email" name="email" placeholder="Email" required/ >
					</div>
					<div class="form-group">
						<h5><span style="color: red;">*</span> Username : </h5>
						<input class="form-control" style="color: grey;" type="text" name="username" placeholder="Username" required/ >
					</div>
					<div class="form-group">
						<h5><span style="color: red;">*</span> Password : </h5>
						<input class="form-control" style="color: grey;" type="password" name="password" placeholder="Password" required/>
					</div>

					<div class="form-group">
						<button class="form-control" type="submit" name="submit" style="color: #ffffff; background: #283290;">
							Daftar
						</button>
					</div>
				</form>
			<?php echo form_close(''); ?>
			</div>
		</div>
	</div>
</div>
</body>


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

