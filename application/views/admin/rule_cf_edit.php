      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
            <li><i class="icon_document_alt"><a href="<?php echo site_url()?>/rule_cf"></i>Nilai CF</a></li>
            <li><i class="fa fa-plus"></i>Edit Nilai Certainty Factor</li>               
          </ol>
        </div>
      </div>
              
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Data
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $nilaicf['id'] ?>" >
                                      <div class="form-group ">
                                          <label for="id_gejala" class="control-label col-lg-2">Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                             <select name="id_gejala" class="form-control"  style="font-size: 12px;">
                                                <?php
                                                  foreach ($gejala as $g) {
                                                    echo " <option value='$g->id'";
                                                    echo $nilaicf['id_gejala']==$g->id?'selected':'' ;
                                                    echo ">$g->nama_gejala</option>";
                                                  }
                                                 ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="id_penyakit" class="control-label col-lg-2">Nama Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="id_penyakit" class="form-control ">
                                               <?php
                                                  foreach ($penyakit as $g) {
                                                    echo " <option value='$g->id_p'";
                                                    echo $nilaicf['id_penyakit']==$g->id_p?'selected':'' ;
                                                    echo ">$g->nama</option>";
                                                  }
                                                 ?>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="mb" class="control-label col-lg-2">Nilai MB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="mb" type="text" name="mb" value="<?php echo $nilaicf['mb'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="md" class="control-label col-lg-2">Nilai MD <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="md" type="text" name="md" value="<?php echo $nilaicf['md'] ?>" required />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="bobot" class="control-label col-lg-2">Bobot <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="bobot" type="text" name="bobot" value="<?php echo $nilaicf['bobot'] ?>" required />
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
