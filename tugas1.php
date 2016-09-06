<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="">
		<div>
			<label>Nama : </label>
			<input type="text" name="nama">
			<label>Mata Kuliah : </label>
			<input type="text" name="matakuliah">
			<label>Nilai : </label>
			<input type="text" name="nilai">
		</div>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>

	<?php
		if (isset($_GET['nama']) && isset($_GET['matakuliah']) && isset($_GET['nilai'])){
			if (($_GET['nama']!="") && ($_GET['matakuliah']!="") && ($_GET['nilai']!="")){
				$nilai = $_GET['nilai'];
				if (($nilai>=0) && ($nilai<=100)){
					if ($nilai >= 60){
						$pesan="Lulus";
					}else {
						$pesan="Tidak Lulus";
					}
				}else{
					$pesan="Nilai Salah";
				}
			}else{
				$pesan="Data Salah";
			}
		}else{
			$pesan="Data Kosong";
		}
		echo "<h1>$pesan</h1>";
	?>
</body>
</html>