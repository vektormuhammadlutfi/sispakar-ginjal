<!--main content start-->
 <!-- container section start -->
<section id="container" class="">
    <section id="main-content">
        <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
                        <li><i class="fa fa-table"></i>Tambah Gejala</li>                         
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?=print_error()?>
                        <form method="post" method="post">
                            <div class="form-group">
                                <label>Kode <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="kd_gejala" value="<?=set_value('kd_gejala', kode_oto('kd_gejala', 'tb_gejalads', 'G0', 2))?>"/>
                            </div>
                            <div class="form-group">
                                <label>Nama Gejala <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="nm_gejala" value="<?=set_value('nm_gejala')?>"/>
                            </div>
                            <div class="form-group">
                                <label>Bobot <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="bobot" value="<?=set_value('bobot')?>"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default"><span class="fa fa-save"></span> Simpan</button>
                                <a class="btn btn-default" href="<?=site_url('gejalads')?>"><span class="fa fa-arrow-left"></span> Kembali</a>
                            </div>            
                        </form>
                    </div>
                </div>
        </section>
    </section>
</section>