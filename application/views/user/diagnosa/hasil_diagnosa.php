<?php
//variabel global untuk simpan hasil df

$hasil_akhir = array();
$diagnosa_akhir = array();

?>
<div class="content" style="background: #283290; margin-top: 17%; margin-right: 5%; margin-left: 5%" id="printTable">
    <h3 style="text-align: center; color: #FFFFFF;">Hasil Analisis CF</h3>
    <div class="box box-warning" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title" style="color: #20D34A;"><b>Gejala yang dipilih</b></h6>
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
    </div><br><!--box-->
    <div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title" style="color: #20D34A;"><b>Hasil Diagnosa</b></h6>
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
            <h3 class="box-title" style="color: #20D34A;">Kesimpulan</h3>
            <hr style="width: 10%;">
        </div><!-- /.box-header -->
        <div class="box-body"  style="text-align: justify; padding-right: 2%;">
            <?php if(sizeof($listPenyakit)>0) { ?>
            <p>
                <b>Nama Pengunjung : <?php echo $this->session->userdata('nama_pengguna') ?>
                </b><br>
                Berdasarkan gejala yang diinput, Anda di prediksi mengidap penyakit <b><?php echo $listPenyakit[0]['nama'];?></b> dengan tingkat kepercayaan nilai MB <b><?php echo $listPenyakit[0]['kepercayaan'];?> %</b> dikurang dengan tingkat ketidakpercayaan nilai MD <b><?php echo $listPenyakit[0]['tidakpercaya']; ?> % </b>maka hasil perhitungan CF sebesar <b><?php echo $listPenyakit[0]['hasilcf']; ?> %. </b> <br/></p>
                <p><h4>
                    Solusi
                    <hr style="width: 5%;">
                </h4>
                <?php echo $listPenyakit[0]['keterangan'];?></p>
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
        <div class="content" style="margin-top: 5%;" id="printTable">
            <h3 style="text-align: center; color: #FFFFFF;">Hasil Analisis DS</h3>
            <div class="box box-warning" style="background: #ffffff; height: auto;">
                <div class="box-header with-border">
                    <h6 class="box-title" style="color: #20D34A;"><b>Gejala yang dipilih</b></h6>
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
                        $hasil_akhir = $new_hasil;
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
            $diagnosa_akhir = $DIAGNOSA[$val];
        }  

                // echo "<pre>";
                // var_dump($diags);
                // echo "</pre>";


                //proses simpan hasil df dsini
                //perbaiki ya...aku ngantuk
                //bagusnya buatkan tabel hasil df dan simpan kesitu
        $user = $this->session->userdata('id_user');
        $k = 0;
        foreach ($best['arr'] as $key => $v) {
                // $diagnosa_akhir = implode(', ', $diags);
                $nm_penyakit = array_values($diags);
                $hasil_kepercayaan = round($best['value'] * 100);
                $in = $this->db->query("INSERT INTO tb_hasilds (id_user, kd_penyakit, nama_penyakit, kepercayaan) VALUES(".$user.", '".$v."', '".$nm_penyakit[$k++]."', ".$hasil_kepercayaan." ) ");
            // $pen=  "'" . str_replace(",", "','", $value['name']) . "'";
        }
        ?>
    </div>
    <div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h3 class="box-title" style="color: #20D34A;">Kesimpulan</h3>
        </div><!-- /.box-header -->
        <div class="panel-body" style="text-align: justify; padding-right: 2%;">
            <b>Nama Pengunjung : <?php echo $this->session->userdata('nama_pengguna') ?>
            </b><br>
            <p>Berdasarkan gejala yang terpilih maka anda di prediksi mengidap penyakit dengan diagnosa paling akurat adalah <strong><?=implode(', ', $diags)?></strong> dengan tingkat kepercayaan <strong><?=round($best['value'] * 100) ?>%</strong> klik untuk<a href="<?=site_url('hitung/solusi')?>" style="color: #696969;"><b> Solusi Umum Penyakit</b></a>.</p>
            <p style="color: red;">*Sistem pakar hanya memberikan solusi secara umum pada tahap awal penyakit !</p>
        </div>
    </div>
</div><!--box body-->
</div><!--box-->
</div> <!-- content -->
<div class="box-footer clearfix" style="padding-bottom: 3%; padding-left: 5%;"><br>
    <a class="btn btn-sm btn-primary" href="<?php echo site_url() ?>/dashboard/diagnosa" style="background: #283290;"><span class="fa fa-refresh"><b> Konsultasi Lagi</b></a>
        <button style="background: #283290;" class="btn btn-sm btn-primary btn-flat" onclick ><b>Cetak</b></button>
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