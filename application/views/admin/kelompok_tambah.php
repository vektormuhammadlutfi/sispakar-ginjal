 <!-- container section start -->
<section id="container" class="">
    <section id="main-content">
        <section class="wrapper">            
            <!--overview start-->
      <div class="row">
      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
          <li><i class="icon_document_alt"><a href="<?php echo site_url()?>/gejala"></i>Kelompok Gejala</a></li>
          <li><i class="fa fa-plus"></i>Data Kelompok Gejala</li>               
        </ol>
      </div>
    </div>
            
          <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" action="" method="POST">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-2">Kelompok Gejala </label>
                                        <div class="col-lg-10">
                                          <input type="text" class="form-control" id="nama" name="nama"  required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="keterangan" class="control-label col-lg-2">Keterangan</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="keterangan" type="text" name="keterangan" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                            <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/kelompok_gejala">Batal</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>  
          
        </section>
    </section>
    <!--main content end-->
</section>
