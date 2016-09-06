<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="">
		<div>
			<label>Nama: </label>
			<input type="text" name="nama">
		</div>
		<div>
			<input type="submit" value="Kirim">
		</div>
	</form>
	<?php
		if (isset($_GET['nama'])){			//isset menentukan apakah nilai dalam get sudah ada atau belum
			$nama = $_GET['nama'];
			if ($nama == ""){
				$nama = "kosong bro";
			}
		} 
		else {
			$nama = "world";
		}
		echo "<h1>Hello, $nama </h1>";
	?>
</body>
</html>