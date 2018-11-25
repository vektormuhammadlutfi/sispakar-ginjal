 <!-- container section start -->
<section id="container" class="">
    <section id="main-content">
        <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
                        <li><i class="fa fa-table"></i>Ubah Relasi Gejala</li>                         
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo validation_errors(); ?>
                        <form method="post">
                            <div class="form-group">
                                <label>Kode <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="kd_penyakit" value="<?=set_value('kd_penyakit', $row->kd_penyakit)?>" readonly=""/>
                            </div>
                            <div class="form-group">
                                <label>Nama Penyakit <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="nama" value="<?=set_value('nama', $row->nama)?>" readonly=""/>
                            </div>
                            <h3>Pilih gejala:</h3>
                            <?php foreach($relasi as $key => $val):?>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="relasi[<?=$key?>]" <?=$val['related'] ? 'checked' : ''?> value="<?=$key?>" /> <?=$val['nm_gejala']?>
                                </label>
                            </div>
                            <?php endforeach?>
                            <div class="form-group">
                                <button class="btn btn-default"><span class="fa fa-save"></span> Simpan</button>
                                <a class="btn btn-default" href="<?=site_url('relasi')?>"><span class="fa fa-arrow-left"></span> Kembali</a>
                            </div>    
                        </form>
                    </div>
                </div>
        </section>
    </section>
</section>
