<?php
        $selected = (array) $_POST['gejala'];
        $this->session->set_userdata('gejala', $selected);
        ?>
        <div class="content" style="margin-top: 17%; margin-left: 5%; margin-right: 5%;" id="printTable">
            <h3 style="text-align: center;">Hasil Analisis</h3>
            <div class="box box-warning" style="background: #ffffff; height: auto;">
                <div class="box-header with-border">
                    <h6 class="box-title"><b>Gejala yang dipilih</b></h6>
                </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gejala</th>
                    </tr>
                </thead>
                <?php
                $no=1;
                foreach($selected as $kode_gejala):?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$gejala[$kode_gejala]->nm_gejala?></td>
                </tr>
                <?php endforeach;?>
                </table>
            </div>
        
        <?php
        $GEJALA = $gejala;
        $DIAGNOSA = $diagnosa; 
                
        $hasil[] = array(
            'arr' => array_keys($DIAGNOSA),
            'name' => implode(',', array_keys($DIAGNOSA)),
            'value' => 1,
        );

        foreach ($selected as $kode):
            $new_hasil = array();
            $arr_diagnosa = $relasi[$kode];                                                
            ?>    
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title"><?=$GEJALA[$kode]->nm_gejala .' ( ' . implode(', ', $arr_diagnosa) .' )'?></h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead><tr>
                        <th>#</th>
                        <th><?=implode(',', $arr_diagnosa) .' &raquo; ' . $GEJALA[$kode]->bobot?></th>
                        <th>&oslash; &raquo; <?=1 - $GEJALA[$kode]->bobot?></th>
                    </tr></thead>
                    <?php foreach($hasil as $row): 
                    $arr = array_intersect($row['arr'], $arr_diagnosa); 
                    $name =  implode(',', $arr);
                    $value = $row['value'] * $GEJALA[$kode]->bobot;
                    $new_hasil[] = array(
                        'arr' => $arr,
                        'name' => $name,
                        'value' => $value,
                    );
                    
                    $arr2 = array_intersect($row['arr'], array_keys($DIAGNOSA)); 
                    $name2 =  implode(',', $arr2);
                    $value2 = $row['value'] * (1 - $GEJALA[$kode]->bobot);
                    
                    $new_hasil[] = array(
                        'arr' => $arr2,
                        'name' => $name2,
                        'value' => $value2,
                    );
                    
                    $hasil = $new_hasil;
                    ?>
                    <tr>
                        <td><?=$row['name']?> &raquo; <?=round($row['value'], 4)?></td>
                        <td><?=$name?> &raquo; <?=round($value, 4)?></td>
                        <td><?=$name2?> &raquo; <?=round($value2, 4)?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php            
                $unik = array();
                foreach($hasil as $row){
                    $unik[$row['name']] = $row['arr'];
                }              
                    
                $new_hasil = DS_hitung($unik, $hasil);
                $hasil = $new_hasil;
                ?>
                <div class="panel-body">            
                    <table class="table table-bordered aw">
                        <tr>
                            <th>Kombinasi Diagnosa</th>
                            <th>Rumus</th>
                            <th>Nilai</th>
                        </tr>
                        <?php foreach($hasil as $key => $val):?>
                        <tr>
                            <td><?=$val['name']?></td>
                            <td><?=$val['desc']?></td>
                            <td>: <?=round($val['value'], 4)?></td>
                        </tr>
                        <?php endforeach?>
                    </table>
                </div>
            </div>
        <?php endforeach;           
        $best = DS_get_best($hasil);    
        $diags = array();    
        foreach($best['arr'] as $val){
            $diags[] =  $DIAGNOSA[$val];
        }       
        ?>
        </div>
        <div class="box box-success" style="background: #ffffff; height: auto;">
            <div class="box-header with-border">
                <h3 class="box-title">Kesimpulan</h3>
            </div><!-- /.box-header -->
            <div class="panel-body">
                <b>Nama Pasien : <?php echo $this->session->userdata('nama_pengguna') ?>
                </b><br>
                <p>Berdasarkan gejala yang terpilih maka anda di prediksi mengidap penyakit dengan diagnosa paling akurat adalah <strong><?=implode(', ', $diags)?></strong> dengan tingkat kepercayaan <strong><?=round($best['value'] * 100) ?>%</strong> klik untuk<a href="<?=site_url('hitung/solusi')?>" style="color: #696969;"><b> Solusi Umum Penyakit</b></a>.</p>
                <p style="color: red;">*Sistem pakar hanya memberikan solusi secara umum pada tahap awal penyakit !</p>
            </div>
        </div>