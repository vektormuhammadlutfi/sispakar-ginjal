      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/gejala"></i>Gejala</a></li>
						<li><i class="fa fa-plus"></i>Tambah Data Gejala</li>						  	
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
                                    <div class="form-group">
                                      <label for="id_klp_gejala" class="control-label col-lg-2">Kelompok Gejala<span class="required">*</span></label>
                                      <div class="col-lg-10">
                                        <select name="id_klp_gejala" class="form-control ">
                                        <option>-Pilih-</option>
                                        <?php $kelompok_gejala = $this->Gejala_model->getlistkelompokgejala();

                                        ?>
                                        <?php foreach ($kelompok_gejala->result() as $key){ ?>
                                          <option value="<?php echo $key->id_klp_gejala ?>"><?php echo $key->nama; ?></option>
                                        <?php } ?> 
                                      
                                      </select>
                                      </div>
                                    </div>
                                      <div class="form-group ">
                                          <label for="id_gejala" class="control-label col-lg-2">Kode Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <input type="text" class="form-control" minlength="4" id="kd_gejala" name="kd_gejala"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama_gejala" class="control-label col-lg-2">Nama Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="nama_gejala" type="text" name="nama_gejala" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/gejala">Batal</a></button>
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
