<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url()?>templates/caremed/images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Peduli Kesehantan Ginjal Anda Sekarang !</h2>
						<p>Lakukan deteksi dini pada kondisi kesehatan Ginjal anda untuk mencegah peningkatan jumlah penderita penyakit Ginjal.</p>
						<div class="button cta_button"><a href="<?php echo site_url() ?>/login_user">Diagnosa</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>
<!-- footer -->
<footer class="footer">
		<div class="copyright" style="background: #283290;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col-lg-4 footer_col">
							<div class="footer_logo_container">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<div class="logo_text">Kidney<span>Care</span></div>
											<div class="logo_box">+</div>
										</div>
										<div class="logo_sub">Kidney Disease Care</div>
									</div>
								</a>
							</div>
						</div>
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Sistem Pakar Penyakit Ginjal | All rights reserved | Template <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>
<!-- page script -->
  <!-- jQuery 2.0.2 -->
   <script type='text/javascript' src='<?php echo base_url();?>asset/assets/js/jquery-1.8.2.min.js'></script>

  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>asset/be/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- DATA TABES SCRIPT -->
  <script src="<?php echo base_url()?>asset/be/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>asset/be/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>asset/be/js/plugins/datatables/dataTables.reload.js" type="text/javascript"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url()?>asset/be/js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url() ?>asset/be/js/jquery.form.js" type="text/javascript" ></script>

  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>asset/be/js/AdminLTE/app.js" type="text/javascript"></script>

  <!-- BootBox -->
  <script src="<?php echo base_url()?>asset/be/js/bootbox.min.js" type="text/javascript"></script>

   <!-- Bootstrap WYSIHTML5 -->
   <!--
  <script src="<?php echo base_url()?>asset/be/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
  -->


  <script src="<?php echo base_url()?>asset/be/js/wysiwyg/lib/js/wysihtml5-0.3.0.js"></script>
  <script src="<?php echo base_url()?>asset/be/js/wysiwyg/src/bootstrap3-wysihtml5.js"></script>


   <!-- Date Picker -->

  <script type="text/javascript" src="<?php echo base_url()?>asset/be/js/plugins/datepicker/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>asset/be/js/plugins/datepicker/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

            
           <!-- auto complete--> 
    <script type='text/javascript' src='<?php echo base_url();?>asset/assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>asset/assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>asset/assets/css/default.css' rel='stylesheet' />

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();
          $(".textarea").wysihtml5();
        //$('.textarea').wysihtml5();
            });
        </script>

<script src="<?php echo base_url()?>templates/caremed/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>templates/caremed/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url()?>templates/caremed/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>templates/caremed/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url()?>templates/caremed/plugins/easing/easing.js"></script>
<script src="<?php echo base_url()?>templates/caremed/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url()?>templates/caremed/js/custom.js"></script>

</body>
</html>