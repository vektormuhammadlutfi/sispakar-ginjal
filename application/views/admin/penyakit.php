    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
						<li><i class="fa fa-table"></i>Data Penyakit</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/penyakit/create">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th><center>NO</center></th>
                                 <th><center>Kode Penyakit</center></th>
                                 <th><center>Nama Penyakit</center></th>
                                 <th width="700px"><center>Solusi</center></th>
                                 <th width="200px"><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($penyakit_data as $penyakit) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $penyakit->kd_penyakit ?></td>
                                 <td><?php echo $penyakit->nama ?></td>
                                 <td style="text-align: justify;"><?php echo $penyakit->keterangan ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-xs btn-default" href="<?=site_url("relasi/ubah/$penyakit->kd_penyakit")?>"> Gejala</a>
                                      <a class="btn btn-xs btn-default" href="<?php echo site_url('/penyakit/edit/').$penyakit->id_p ?>"><i class="fa fa-edit"></i></a>
                                      <a class="btn btn-xs btn-default" href="<?php echo site_url('/penyakit/hapus/').$penyakit->id_p ?>"><i class="icon_close_alt2"></i></a>
                                  </div></center>
                                  </td>
                              </tr> 
                              <?php endforeach ?>                           
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>  
            
          </section>
      </section>
      <!--main content end-->
