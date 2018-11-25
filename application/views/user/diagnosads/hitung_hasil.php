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
                                    <li><a href="<?php echo site_url() ?>dashboard/diagnosa">Diagnosa CF</a></li>
                                    <li><a href="<?php echo site_url() ?>Hitung">Diagnosa DS</a></li>
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
                                        <div class="logo_text">SP<span>Kidney</span></div>
                                        <div class="logo_box">+</div>
                                    </div>
                                    <div class="logo_sub">Sistem Pakar Penyakit<br><i>Ginjal</i></div>
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
            <div class="menu_extra">
                <div class="menu_appointment"><a href="#">Request an Appointment</a></div>
                <div class="menu_emergencies">For Emergencies: +563 47558 623</div>
            </div>
        </div>
    </div>

        <?php
        $selected = (array) $_POST['gejala'];
        $this->session->set_userdata('gejala', $selected);
        ?>
        <div class="content" style="margin-top: 17%; margin-left: 5%; margin-right: 5%;" id="printTable">
            <h3 style="text-align: center;">Hasil Analisis</h3>
            <div class="box box-warning" style="background: #ffffff; height: auto;">
                <div class="box-header with-border">
                    <h6 class="box-title"><b>Gejala yang dipilih</b></h6>
                </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gejala</th>
                    </tr>
                </thead>
                <?php
                $no=1;
                foreach($selected as $kode_gejala):?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$gejala[$kode_gejala]->nm_gejala?></td>
                </tr>
                <?php endforeach;?>
                </table>
            </div>
        
        <?php
        $GEJALA = $gejala;
        $DIAGNOSA = $diagnosa; 
                
        $hasil[] = array(
            'arr' => array_keys($DIAGNOSA),
            'name' => implode(',', array_keys($DIAGNOSA)),
            'value' => 1,
        );

        foreach ($selected as $kode):
            $new_hasil = array();
            $arr_diagnosa = $relasi[$kode];                                                
            ?>    
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title"><?=$GEJALA[$kode]->nm_gejala .' ( ' . implode(', ', $arr_diagnosa) .' )'?></h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead><tr>
                        <th>#</th>
                        <th><?=implode(',', $arr_diagnosa) .' &raquo; ' . $GEJALA[$kode]->bobot?></th>
                        <th>&oslash; &raquo; <?=1 - $GEJALA[$kode]->bobot?></th>
                    </tr></thead>
                    <?php foreach($hasil as $row): 
                    $arr = array_intersect($row['arr'], $arr_diagnosa); 
                    $name =  implode(',', $arr);
                    $value = $row['value'] * $GEJALA[$kode]->bobot;
                    $new_hasil[] = array(
                        'arr' => $arr,
                        'name' => $name,
                        'value' => $value,
                    );
                    
                    $arr2 = array_intersect($row['arr'], array_keys($DIAGNOSA)); 
                    $name2 =  implode(',', $arr2);
                    $value2 = $row['value'] * (1 - $GEJALA[$kode]->bobot);
                    
                    $new_hasil[] = array(
                        'arr' => $arr2,
                        'name' => $name2,
                        'value' => $value2,
                    );
                    
                    $hasil = $new_hasil;
                    ?>
                    <tr>
                        <td><?=$row['name']?> &raquo; <?=round($row['value'], 4)?></td>
                        <td><?=$name?> &raquo; <?=round($value, 4)?></td>
                        <td><?=$name2?> &raquo; <?=round($value2, 4)?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php            
                $unik = array();
                foreach($hasil as $row){
                    $unik[$row['name']] = $row['arr'];
                }              
                    
                $new_hasil = DS_hitung($unik, $hasil);
                $hasil = $new_hasil;
                ?>
                <div class="panel-body">            
                    <table class="table table-bordered aw">
                        <tr>
                            <th>Kombinasi Diagnosa</th>
                            <th>Rumus</th>
                            <th>Nilai</th>
                        </tr>
                        <?php foreach($hasil as $key => $val):?>
                        <tr>
                            <td><?=$val['name']?></td>
                            <td><?=$val['desc']?></td>
                            <td>: <?=round($val['value'], 4)?></td>
                        </tr>
                        <?php endforeach?>
                    </table>
                </div>
            </div>
        <?php endforeach;           
        $best = DS_get_best($hasil);    
        $diags = array();    
        foreach($best['arr'] as $val){
            $diags[] =  $DIAGNOSA[$val];
        }       
        ?>
        </div>
        <div class="box box-success" style="background: #ffffff; height: auto;">
            <div class="box-header with-border">
                <h3 class="box-title">Kesimpulan</h3>
            </div><!-- /.box-header -->
            <div class="panel-body">
                <b>Nama Pasien : <?php echo $this->session->userdata('nama_pengguna') ?>
                </b><br>
                <p>Berdasarkan gejala yang terpilih maka anda di prediksi mengidap penyakit dengan diagnosa paling akurat adalah <strong><?=implode(', ', $diags)?></strong> dengan tingkat kepercayaan <strong><?=round($best['value'] * 100) ?>%</strong> klik untuk<a href="<?=site_url('hitung/solusi')?>" style="color: #696969;"><b> Solusi Umum Penyakit</b></a>.</p>
                <p style="color: red;">*Sistem pakar hanya memberikan solusi secara umum pada tahap awal penyakit !</p>
            </div>
        </div>
    </div>
    <p style="margin-left: 5%;"><br>
        <a class="btn btn-sm btn-primary" href="<?=site_url('hitung')?>"><span class="fa fa-refresh"></span> Konsultasi Lagi</a>
        <button class="btn btn-sm btn-primary btn-flat" onclick >Cetak</button>
    </p><br>
</div>

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
