    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
                        <li><i class="fa fa-table"></i>Data Nilai Bobot</li>                           
                    </ol>
                </div>
            </div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/gejalads/tambah">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Gejala</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php    
                            $no=0;
                            foreach($rows as $row):?>
                            <tr>
                                <td><?=++$no ?></td>
                                <td><?=$row->kd_gejala?></td>
                                <td><?=$row->nm_gejala?></td>
                                <td><?=$row->bobot?></td>
                                <td>
                                    <a class="btn btn-xs btn-default" href="<?=site_url("gejalads/ubah/$row->kd_gejala")?>"><span class="fa fa-edit"></span></a>
                                    <a class="btn btn-xs btn-default" href="<?=site_url("gejalads/hapus/$row->kd_gejala")?>" onclick="return confirm('Hapus data?')"><span class="icon_close_alt2"></span></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                      </section>
                  </div>
              </div>  
            
          </section>
      </section>
      <!--main content end-->
