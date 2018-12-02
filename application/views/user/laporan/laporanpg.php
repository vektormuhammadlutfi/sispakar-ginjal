<div class="row">
    <div class="col-md-12">
		<p align="center"><b>DATA PENGGUNA</b></p><br>
		<p align="center"><b>SISTEM PAKAR PENYAKIT GINJAL</b></p><br>
		<hr style="width: 600px; height: 4px; border: none; background-color: #000000;">
			<h4 align="center">Laporan Data Pengguna</h4>                
                <p align="center">
					<table style="border:solid 1px"; align="center";>
					<thead>
						<tr style="text-align : center">
							<th>No</th>
	                        <th>Nama Lengkap</th>
	                        <th>Jenis Kelamin</th>
	                        <th>Usia</th>
	                        <th>Alamat</th>
	                        <th>Email</th>
	                        <th>Username</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1;  foreach($user as $list) : ?>
						<tr style="text-align : center">
							<td><?php echo $no++ ?></td>
							<td><?php echo $list->nama_pengguna ?> </td>
							<td><?php echo $list->jk ?> </td>
							<td><?php echo $list->umur ?> </td>
							<td><?php echo $list->alamat ?> </td>
							<td><?php echo $list->email ?> </td>
							<td><?php echo $list->username ?> </td>
						</tr>
						<?php endforeach ?>
					</tbody>
					</table>
				</p>
	</div>
</div>
