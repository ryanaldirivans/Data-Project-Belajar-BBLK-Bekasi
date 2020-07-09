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
if (isset($_POST['submit2'])){
	$sisi = $_POST['sisi'];
	$luas_persegi = luasPersegi($sisi);
	$kel_persegi = KelPersegi($sisi);
}else{
	$luas_persegi = 0;
	$kel_persegi = 0;
}
if(isset($_POST['submit'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$luasPersegiP = luasPersegiPanjang($panjang, $lebar);
	$KelPersegiP = KelilingPersegiPanjang($panjang, $lebar);
}
else{
	$luasPersegiP = 0;
	$KelPersegiP = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lingkaran</title>
</head>
<body>
	<h1 align="center">PERHITUNGAN BANGUN DASAR</h1>
	<div width="500px">

		<form action="" method="">
			<fieldset align="center">
				<h3>Hitung Luas dan keliling Lingkaran</h3>
				Masukkan Jari-jari Lingkaran : <input type="number" name="jari" required>
				<input type="submit" value="Hitung"><br>
			</form>
			Luas lingkaran : <?=$luas;?>
			Keliling Lingkaran : <?=$kel;?>
		</fieldset>
		<br>

		<form action="" method="post">
			<fieldset align="center">
				<h3>Hitung Luas dan keliling Persegi</h3>
				Masukkan Sisi : <input type="number" name="sisi">
				<input type="submit" name="submit2" value="Hitung"><br>
			</form>
			Luas Persegi  : <?=$luas_persegi;?>
			Keliling Persegi : <?=$kel_persegi;?>
		</fieldset>
		<br>

		<form action="" method="post">
			<fieldset align="center">
				<h3>Hitung Luas dan keliling Persegi Panjang</h3>
				Masukkan Panjang : <input type="text" name="panjang"><br>
				Masukkan Lebar: <input type="text" name="lebar">
				<input type="submit" name="submit" value="Hitung"><br>
			</form>
			Luas Persegi Panjang : <?=$luasPersegiP;?>
			Keliling Persegi Panjang : <?=$KelPersegiP;?>
		</fieldset>
		<br>
	</div>
</body>
</html>