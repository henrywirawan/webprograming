<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = 5;
		$b = "5";
		$c = 5.0;

		echo "$a == $b = " . var_export($a == $b, true) . "<br>";		// == tidak mempermasalahkan tipe data (nilai saja yang harus sama)
		echo "$a === $b = " . var_export($a === $b, true) . "<br>";		// === mempermasalahkan tipe data (nilai dan tipe data harus sama)
		echo "$a === $c = " . var_export($a === $c, true) . "<br>";	

		$x = 2;
		$y = $x++ + 5;
		echo "x = " . $x . "<br>";
		echo "y = " . $y . "<br>";

		echo "<p>menampilkan literal \$a tok aja</p>"; // "\" berfungsi untuk menonaktifkan fungsi "$"

		$a = true;
		$b = false;
		$c = true;
		echo "a xor b => " . var_export($a xor $b, true) . "<br>";
		echo "a xor c => " . var_export($a xor $c, true) . "<br>";

	?>
</body>
</html>