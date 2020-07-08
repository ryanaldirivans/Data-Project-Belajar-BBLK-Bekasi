<?php 
include_once 'myFunction.php';

if(isset($_GET['jari'])){
	$r = $_GET['jari'];
	$luas = hitungLuasLingkaran($r);
	$kel  = hitungKelLingkaran($r);
}else{
	$luas = 0;
	$kel = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lingkaran</title>
</head>
<body>
	<form action="" method="">
		Jari-jari Lingkaran : <input type="number" name="jari" required><br>
		<input type="submit" value="Hitung">
	</form>
	<hr>
	Luas lingkaran : <?=$luas;?>
	Keliling Lingkaran : <?=$kel?>
</body>
</html>