<!DOCTYPE html>
<html lang="en">
<head>
    <title>SP Penyakit Ginjal</title>
    <link rel="icon" href="img/core-img/favicon.ico">
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
                                <div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto" style="background: #283290;">For Emergencies: +563 47558 623</div>
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
                                        <li><a href="<?php echo site_url() ?>/dashboard/index">Beranda</a></li>
                                        <li><a href="<?php echo site_url() ?>/dashboard/informasi">Informasi</a></li>
                                        <li><a href="<?php echo site_url() ?>/dashboard/tentang">Tentang</a></li>
                                        <li><a href="<?php echo site_url() ?>/login_user">Diagnosa</a></li>
                                        <?php 
                                        if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
                                            ?>
                                            <li><a href="<?php echo site_url() ?>/login_user/logout"><?php echo $this->session->userdata('nama_pengguna') ?>,  Logout </a></li>
                                            <?php } else{ ?>
                                            <li><a href="<?php echo site_url() ?>/login_user"></i> Login </a></li>
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
                                    <a href="<?php echo site_url() ?>/dashboard/index">
                                        <div class="logo_content d-flex flex-column align-items-start justify-content-center">
                                            <div class="logo_line"></div>
                                            <div class="logo d-flex flex-row align-items-center justify-content-center">
                                                <div class="logo_text"><b>SPGinjal</b></div>
                                                <div class="logo_box">+</div>
                                            </div>
                                            <div class="logo_sub" style="color: #283290;">Sistem Pakar <b>Penyakit<br>Ginjal</b></div>
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
                            <li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/login_user">Diagnosa</a></li>
                            <?php 
                            if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
                                ?>
                                <li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/login_user/logout"><?php echo $this->session->userdata('nama_pengguna') ?>,  Logout </a></li>
                                <?php } else{ ?>
                                <li class="menu_item menu_mm"><a href="<?php echo site_url() ?>/login_user"></i> Login </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

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
                            <div class="menu_extra">
                                <div class="menu_appointment"><a href="#">Request an Appointment</a></div>
                                <div class="menu_emergencies">For Emergencies: +563 47558 623</div>
                            </div>
                        </div>
                    </div>
                    <!--main content start-->
                    <section id="main-content">
                        <section class="wrapper" id="printTable">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title">
                                      <h2 style="margin-top: 15%; margin-left: 5%;">
                                          <h3 style="margin-left: 5%;">Solusi Umum Penyakit Ginjal</h3>
                                      </div>
                                      <section class="panel" style="margin-left: 5%; margin-right: 5%;">
                                        <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>  
                                                 <th><center>NO</center></th>
                                                 <th><center>Nama Penyakit</center></th>
                                                 <th><center>Solusi</center></th>
                                                 <?php 
                                                 $no=1;
                                                 foreach ($penyakit_data as $penyakit) : ?>  
                                                 <tr>
                                                     <td style="width: 10px;"><?php echo $no++ ?></td>
                                                     <td style="width: 80px;"><?php echo $penyakit->nama ?></td>
                                                     <td style="width: 700px; text-align: justify;"><?php echo $penyakit->keterangan ?></td>
                                                </tr> 
                                             <?php endforeach ?>                           
                                         </tbody>
                                     </table>
                                 </section>
                             </div>
                         </div>
                     </section>
                     <button style="margin-left: 5%; margin-bottom: 5%; background: #283290;" class="btn btn-sm btn-primary btn-flat" onclick ><span class="fa fa-print"></span> Cetak</button>
                     <a style="margin-bottom: 5%; background: #283290;" class="btn btn-sm btn-primary" href="<?=site_url('dashboard/diagnosa')?>"><span class="fa fa-refresh"></span> Konsultasi Lagi</a>
                 </section>
                 <!--main content end-->

                 <script type="text/javascript">
                    function printData()
                    {
                        var
                        divToPrint=document.getElementById("printTable");
                        newWin= window.open("");
                        newWin.document.write(divToPrint.outerHTML);
                        newWin.print();
                        newWin.close();
                    }

                    $('button').on('click',function(){
                        printData();
                    }) 
                </script>


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
