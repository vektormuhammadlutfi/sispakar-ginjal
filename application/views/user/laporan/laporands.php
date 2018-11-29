<div class="row">
    <div class="col-md-12">
		<p align="center"><b>HASIL DIAGNOSA METODE DEMPSTER SHAFER</b></p><br>
		<p align="center"><b>SISTEM PAKAR PENYAKIT GINJAL</b></p><br>
		<hr style="width: 750px; height: 4px; border: none; background-color: #000000;">
			<h4 align="center">Laporan Hasil Diagnosa Pengguna</h4>                
                <p align="center">
					<table style="border:solid 1px"; align="center";>
					<thead>
						<tr style="text-align : center">
							<th>No</th>
							<th>Nama Pasien</th>
							<th>Kode Penyakit</th>
							<th>Nama Penyakit</th>
							<th>Waktu Diagnosa</th>
							<th>Hasil Diagnosa (%)</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1;  foreach($hasilds as $list) : ?>
						<tr style="text-align : center">
							<td><?php echo $no++ ?></td>
							<td><?php echo $list->nama_pengguna ?> </td>
							<td><?php echo $list->kd_penyakit ?> </td>
							<td><?php echo $list->nama_penyakit ?> </td>
							<td><?php echo $list->created_at ?> </td>
							<td><?php echo $list->kepercayaan ?> </td>
						</tr>
						<?php endforeach ?>
					</tbody>
					</table>
				</p>
	</div>
</div>
