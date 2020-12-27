<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="alert alert-info">Data Dosen</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require '../connection.php';
				$query =" SELECT * FROM dosen ";
			// jalankan query diatas
				$result = mysqli_query($link, $query);
				$no = 1;
				while ($isi = mysqli_fetch_object($result)) {

					?>	
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $isi->nip; ?></td>
						<td><?= $isi->nama_dosen; ?></td>
						<td><?= $isi->alamat; ?></td>
						<td>
							<a href="" class="btn btn-danger">Del</a>
							<a href="" class="btn btn-warning">Edit</a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>