<div class="content" style="margin-top: 17%; margin-right: 5%; margin-left: 5%" id="printTable">
    <h3 style="text-align: center;">Hasil Analisis</h3>
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