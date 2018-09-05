<div class="content" style="margin-top: 17%;">
<div class="box box-success" style="background: #ffffff; height: auto;">
        <div class="box-header with-border">
            <h6 class="box-title">Riwayat Diagnosa</h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tbl-list" class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nama Pengguna</th>
                    <th>Nama Penyakit</th>
                    <th>Kepercayaan</th>
                    <th>Waktu</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listHasil as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value['id_penyakit']." - ".$value['nama_penyakit']?></td>
                            <td><?php echo $value['kepercayaan']?> %</td>
                            <td><?php echo $value['created_at']?> %</td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->