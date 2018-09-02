<div class="content" style="margin-top: 17%;">
<div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title">Hasil Diagnosa</h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tbl-list" class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nama Pengguna</th>
                    <th>Nama Penyakit</th>
                    <th>Tanggal Diagnosa</th>
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