<?php $this->load->view('usertemp/header') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>templates/caremed/styles/about_responsive.css">
<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url()?>templates/caremed/images/services.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">Tentang <span>Sistem Pakar</span></div>
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?php echo site_url() ?>/dashboard/index">Beranda</a></li>
								<li>Tentang Aplikasi Sistem Pakar</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- About -->

<div class="about">
	<div class="container">
		<div class="row">

			<!-- About Content -->
			<div class="col-lg-8">
				<div class="section_title"><h2>Sistem Pakar</h2></div>
				<div class="about_text">
					<p style="text-align: justify;">Pistem pakar adalah sebuah sistem yang kinerjanya mengadopsi keahlian yang dimiliki seorang pakar dalam bidang tertentu kedalam sistem atau program komputer yang disajikan dengan tampilan yang dapat digunakan oleh pengguna yang bukan seorang pakar sehingga dengan sistem tersebut pengguna dapat membuat sebuah keputusan atau menentukan kebijakan layaknya seorang pakar.</p>
					<p style="text-align: justify;">Tujuan dari sistem pakar adalah untuk memindahkan pengetahuan dari seorang ahli atau sumber keahlian lain ke dalam komputer dan kemudian memindahkan dari komputer kepada user yang tidak ahli.</p>
				</div><br><br><br>
				<div class="section_title"><h2>Cara Menggunakan Aplikasi Sistem Pakar</h2></div>
				<div class="about_text">
					<h3><i class="fa fa-home"></i> Beranda</h3>
					<p style="text-align: justify;">Klik Menu Beranda untuk mendapatkan informasi tentang apa itu penyakit ginjal dan penjelasannya, proses diagnosis penyakit ginjal, dan informasi makanan yang cocok untuk penderita penyakit ginjal.</p><br>
					<h3><i class="fa fa-book"></i> Informasi</h3>
					<p style="text-align: justify;">Klik Menu Informasi untuk mendapatkan informasi tentang penyaki ginjal dan jenis-jenis penyakit ginjal yang terdapat pada aplikasi sistem pakar diagnosa penyakit ginjal.</p><br>
					<h3><i class="fa fa-tint"></i> Diagnosa</h3>
					<p style="text-align: justify;">Klik Menu Diagnosa untuk melakukan diagnosa penyakit dengan terlebih dahulu melakukan login, jika belum memiliki akun maka silahkan melakukan registrasi dengan mengklik link yang ada dibawah tombol login.</p><br>
					<h3><i class="fa fa-key"></i> Login</h3>
					<p style="text-align: justify;">Klik Login untuk melakukan diagnosa, Anda dapat melakukan login kapan pun untuk melakukan diagnosa jika sudah memiliki akun yang terdaftar pada sistem.</p><br>
				</div>
				<div class="section_title"><h2>Hal yang dilakukan Setelah Login</h2></div>
				<div class="about_text">
					<h3><i class="fa fa-tint"></i> Diagnosa</h3>
					<p style="text-align: justify;">Setelah anda login, silahkan melakukan diagnosa dengan memilih gejala-gejala yang ada, kemudian lihat hasil diagnosa, anda juga bisa mencetak hasil diagnosa atau kembali melakukan diagnosa ulang penyakit.</p><br>
					<h3><i class="fa fa-lock"></i> Log Out</h3>
					<p style="text-align: justify;">Klik Log Out setelah anda selesai menggunakan sistem.</p><br>
				</div>
			</div>

			<!-- Boxes -->
			<div class="col-lg-4 boxes_col">

				<!-- Box -->
				<div class="box working_hours">
					<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="<?php echo base_url()?>templates/caremed/images/service_2.svg" alt=""></div></div>
					<div class="box_title">Metode Algoritma</div>
					<div class="box_text">Pada aplikasi sistem pakar ini digunakan 2 metode algoritma yaitu metode <i>certainty factor</i> dan metode <i>dempster shafer</i></div>
				</div>

				<!-- Box -->
				<div class="box box_appointments">
					<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="<?php echo base_url()?>templates/caremed/images/milestone_3.svg" alt=""></div></div>
					<div class="box_title">Pakar
						<h4>dr. Amelia Rifai Sp.PD</h4></div>
						<div class="box_text">pakar adalah seseorang yang memiliki keahlian tertentu pada bidang ilmu tertentu yang dapat memberikan suatu keputusan pada permasalahan tertentu.</div>
					</div>

					<!-- Box -->
					<div class="box working_hours">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="<?php echo base_url()?>templates/caremed/images/alarm-clock.svg" alt=""></div></div>
						<div class="box_title">Jaga Pola Hidup Sehat</div>
						<div class="box_text" style="text-align: justify;">Jaga pola hidup sehat anda dengan rutin berolahraga, mengatur jadwal olahraga minimal 2x dalam satu minggu, serta konsumsi air putih yang cukup.</div>
					</div>

					<!-- Box -->
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="<?php echo base_url()?>templates/caremed/images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Konsultasikan Kesehatan</div>
						<div class="box_text" style="text-align: justify;">Rutin melakukan konsultasi kesehatan minimal 1x dalam satu tahun untuk mengetahui kemungkinan penyakit yang anda derita.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team" style="padding-top: 1%;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Metode Algoritma</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Member -->
				<div class="col-lg-6 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="<?php echo base_url()?>templates/caremed/images/team_3.png" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">Certainty Factor</a></div>
							<div class="team_member_title"><p style="text-align: justify;">Certainty factor adalah suatu metode untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti yang berbentuk metric yang biasanya digunakan dalam sistem pakar. Metode ini sangat cocok untuk sistem pakar yang mendiagnosis sesuatu yang belum pasti.</p>
								<p style="text-align: justify;">Metode ini pada dasarnya adalah berlandaskan pada asumsi keyakinan dari pakar untuk melakukan penalaran. Dimana pada penalaran terjadi ketidak pastian pada fakta, ukuran ketidakpastian pada penalaran dinyatakan dengan bilangan yang bernama certainty factor atau biasa disingkat sebagai bilangan cf</p></div>
							</div>
						</div>
					</div>

					<!-- Team Member -->
					<div class="col-lg-6 team_col">
						<div class="team_member">
							<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="<?php echo base_url()?>templates/caremed/images/team_1.png" alt=""></div>
							<div class="team_member_info">
								<div class="team_member_name"><a href="#">Dempster Shafer</a></div>
								<div class="team_member_title"><p style="text-align: justify;">Metode dempster-shafer pertama kali diperkenalkan oleh Dempster, yang melakukan percobaan model ketidakpastian dengan range probabilities dari pada sebagai probabilitas tunggal. Pada tahun 1976 Shafer mempublikasikan teori Dempster pada sebuah buku yang berjudul Mathematical Theory Of Evident. Dempster-Shafer Theory Of Evidence, menunjukkan suatu cara untuk memberikan bobot keyakinan sesuai fakta yang dikumpulkan.</p>
									<p style="text-align: justify;">Secara umum teori Dempster-Shafer ditulis dalam suatu interval: [Belief,Plausibility]. Belief (Bel) adalah ukuran kekuatan evidence dalam mendukung suatu himpunan proposisi.</p></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<?php $this->load->view('usertemp/footer') ?>

