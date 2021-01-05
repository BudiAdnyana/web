<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Tambah Data</div>
		
		<form action="" method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi">
			</div>

			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-danger">Batal</a>
			
		</form>

		<?php
			require '../connection.php';
			if (isset($_POST['simpan'])) {
				$input_nim = $_POST[txtnim];
				$input_nama = $_POST[txtnama];
				$input_prodi = $_POST[txtprodi];

				$query = "INSERT INTO mahasiswa VALUES ('$input_nim','$input_nama','$input_prodi')";
				$result	= mysqli_query($link, $query);
				if ($result) {
					header('location: index.php');
				}else{
					echo "Gagal Disimpan" . mysqli_error($link);
				}
			}
		?>
	</div>

</body>
</html>