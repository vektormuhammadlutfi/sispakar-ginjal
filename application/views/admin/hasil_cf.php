<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
						<li><i class="fa fa-table"></i>Hasil Diagnosa CF</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-check"></i><a href="#">Hasil Diagnosa CF</a>
                          </header>
                          <a href="<?php echo site_url() ?>/dashboard/cetak_laporan">
                                  <button type="botton" class="btn btn-default">Cetak</button>
                          </a>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th>NO</th>
                                 <th>Nama Pasien</th>
                                 <th>Penyakit</th>
                                 <th>Tanggal Diagnosa</th>
                                 <th>Hasil Diagnosa</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($kelompok_data as $hasilcf) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $hasilcf['nama_pengguna'] ?></td>
                                 <td><?php echo $hasilcf['nama'] ?></td>
                                 <td><?php echo $hasilcf['tanggal'] ?></td>
                                 <td><?php echo $hasilcf['nilaicf'] ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-default" href="<?php echo site_url('/hasil_cf/hapus_cf/').$hasilcf['gpid'] ?>"><i class="icon_close_alt2"></i></a>
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