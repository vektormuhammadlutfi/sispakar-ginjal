      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/rule_cf"></i>Nilai CF</a></li>
						<li><i class="fa fa-plus"></i>Nilai Certainty Factor</li>						  	
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
                                          <label for="id_gejala" class="control-label col-lg-2">Nama Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="id_gejala" class="form-control ">
                                                <option>-Pilih-</option>
                                                <?php $data = $this->Rulecf_model->getgejala();

                                                ?>
                                                <?php foreach ($data->result() as $key){ ?>
                                                  <option value="<?php echo $key->id ?>"><?php echo $key->nama_gejala; ?></option>
                                                <?php } ?> 
                                              
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="id_p" class="control-label col-lg-2">Nama Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="id_penyakit" class="form-control ">
                                                <option>-Pilih-</option>
                                                <?php $data = $this->Rulecf_model->getpenyakit();

                                                ?>
                                                <?php foreach ($data->result() as $key){ ?>
                                                  <option value="<?php echo $key->id_p ?>"><?php echo $key->nama; ?></option>
                                                <?php } ?> 
                                              
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="mb" class="control-label col-lg-2">Nilai MB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="mb" type="text" name="mb" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="md" class="control-label col-lg-2">Nilai MD <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="md" type="text" name="md" required />
                                          </div>
                                      </div>

                                       <div class="form-group ">
                                          <label for="bobot" class="control-label col-lg-2">Bobot <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="bobot" type="text" name="bobot" required />
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/rule_cf">Batal</a></button>
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
