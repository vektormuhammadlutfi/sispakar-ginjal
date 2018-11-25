<!--main content start-->
      <section id="main-content">
        <section class="wrapper">            
              <!--overview start-->
                    
                <!-- <div class="panel panel-default"> -->
                            <div class="panel-heading">
                                <i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a>
                                <i class="fa fa-table"></i>Data Relasi     
                            </div>
                            <div class="table-responsive">
                                <?php           
                                    $diagnosa = array();
                                    foreach($DIAGNOSA as $row){
                                        $diagnosa[$row->kd_penyakit] = $row->nama;
                                    }
                                          
                                    $gejala = array();
                                    foreach($GEJALA as $row){
                                        $gejala[$row->kd_gejala] = $row->nm_gejala;
                                    }
                                    $relasi = array();
                                    foreach ($RELASI as $row) {                                
                                        $relasi[$row->kd_penyakit][$row->kd_gejala] = 1;                
                                    }                                
                                ?>
                                <table class="table table-bordered table-hover table-striped">
                                    <thead><tr>
                                        <th style="text-align: center;">Kode Penyakit</th>
                                        <th>Nama Penyakit</th>
                                        <?php foreach ($gejala as $key => $val):?>
                                        <th><?=$key?></th>
                                        <?php endforeach ?>
                                        <th>Aksi</th>
                                    </tr></thead>    
                                    <?php foreach ($diagnosa as $key => $val):?>
                                    <tr>
                                        <td><?=$key?></td>
                                        <td><?=$val?></td>
                                        <?php foreach ($gejala as $k => $v):?>
                                        <td><?=isset($relasi[$key][$k]) ? '&#10004;' : ''?></td>
                                        <?php endforeach ?>
                                        <td class="nw">
                                            <a class="btn btn-xs btn-default" href="<?=site_url("relasi/ubah/$key")?>"><span class="fa fa-edit"></span></a>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </table>
                            </div>
                <!-- </div> -->
        </section>
    </section>
