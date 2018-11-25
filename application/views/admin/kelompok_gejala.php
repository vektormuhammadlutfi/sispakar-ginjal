<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
						<li><i class="fa fa-table"></i>Data Kelompok Gejala</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/kelompok_gejala/create">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th>NO</th>
                                 <th>Nama Kelompok Gejala</th>
                                 <th>Keterangan</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($kelompok_data as $gejala) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $gejala->nama ?></td>
                                 <td><?php echo $gejala->keterangan ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-xs btn-default" href="<?php echo site_url('/kelompok_gejala/edit/').$gejala->id_klp_gejala ?>"><i class="fa fa-edit"></i></a>
                                      <a class="btn btn-xs btn-default" href="<?php echo site_url('/kelompok_gejala/hapus/').$gejala->id_klp_gejala ?>"><i class="icon_close_alt2"></i></a>
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