<div class="content" style="margin-top: 17%; margin-right: 5%; margin-left: 5%" id="printTable">
    <h3 style="text-align: center;">Hasil Analisis CF</h3>
    <div class="box box-warning" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title"><b>Gejala yang dipilih</b></h6>
        </div><!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="tbl-list" class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Gejala</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listGejala->result() as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kd_gejala." - ".$value->nama_gejala?></td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->
    <div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title"><b>Hasil Diagnosa</b></h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tbl-list" class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nama Penyakit</th>
                    <th>Nilai MB</th>
                    <th>Nilai MD</th>
                    <th>Hasil CF</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listPenyakit as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value['kd_penyakit']." - ".$value['nama']?></td>
                            <td><?php echo $value['kepercayaan']?> %</td>
                            <td><?php echo $value['tidakpercaya']?> %</td>
                            <td><?php echo $value['hasilcf']?> %</td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->

    <div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h3 class="box-title">Kesimpulan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if(sizeof($listPenyakit)>0) { ?>
                <p>
                    <b>Nama Pasien : <?php echo $this->session->userdata('nama_pengguna') ?>
                    </b><br>
                    Berdasarkan gejala yang diinput, Anda di prediksi mengidap penyakit <b><?php echo $listPenyakit[0]['nama'];?></b> dengan tingkat kepercayaan nilai MB <b><?php echo $listPenyakit[0]['kepercayaan'];?> %</b> dikurang dengan tingkat ketidakpercayaan nilai MD <b><?php echo $listPenyakit[0]['tidakpercaya']; ?> % </b>maka hasil perhitungan CF sebesar <b><?php echo $listPenyakit[0]['hasilcf']; ?> %. </b> <br/></p>
                <p><h3>
                    Solusi
                </h3><br>
                <br><?php echo $listPenyakit[0]['keterangan'];?></p>
                <p style="color: red;">*Sistem pakar hanya memberikan solusi secara umum pada tahap awal penyakit !</p>
                    <?php }else{?>
                <p>
                    Penyakit tidak dapat diprediksi karena tingkat kepercayaan gejala terlalu rendah
                </p>
            <?php }?>
            <hr>
        </div>
    </div>
            <?php
                $selected = (array) $_POST['gejala'];
                $this->session->set_userdata('gejala', $selected);
                ?>
                <div class="content" style="margin-top: 17%; margin-left: 5%; margin-right: 5%;" id="printTable">
                    <h3 style="text-align: center;">Hasil Analisis DF</h3>
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

                //proses simpan hasil df dsini
                //perbaiki ya...aku ngantuk
                //bagusnya buatkan tabel hasil df dan simpan kesitu
                $in = $this->db->query("INSERT INTO tb_hasilcf (id_user, kd_penyakit, nama_penyakit, kepercayaan) VALUES($this->session->userdata('id_user'), 'P007', 'ini hasil df', ".round($best['value'] * 100)." ) ");
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
        </div><!--box body-->
    </div><!--box-->
</div> <!-- content -->
        <div class="box-footer clearfix" style="padding-bottom: 3%; padding-left: 5%;"><br>
            <a class="btn btn-sm btn-primary" href="<?php echo site_url() ?>/dashboard/diagnosa"><span class="fa fa-refresh">Konsultasi Lagi</a>
            <button class="btn btn-sm btn-primary btn-flat" onclick >Cetak</button>
        </div>

<script type="text/javascript">
    function printData()
    {
        var
        divToPrint=document.getElementById("printTable");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    }) 
</script>