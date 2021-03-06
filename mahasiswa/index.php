<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require '../connection.php';
				$query =" SELECT * FROM mahasiswa ";
			// jalankan query diatas
				$result = mysqli_query($link, $query);
				$no = 1;
				while ($isi = mysqli_fetch_object($result)) {

					?>	
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $isi->nim; ?></td>
						<td><?= $isi->nama_mahasiswa; ?></td>
						<td><?= $isi->prodi; ?></td>
						<td>
							<a href="delete.php?nim=<?php echo $isi->nim; ?>"
							class="btn btn-danger">Delete</a>

							<a href="edit.php?nim=<?php echo $isi->nim; ?>" 
							class="btn btn-warning">Edit</a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
			
		</table>

		<a href="create.php" class="btn btn-info">Tambah Data</a>
		
	</div>

</body>
</html>