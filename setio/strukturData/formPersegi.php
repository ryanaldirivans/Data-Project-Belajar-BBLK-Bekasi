<?php 
include_once 'myFunction.php';
if (isset($_POST['persegi'])){
	$sisi = $_POST['sisi'];
	$luas_persegi = luasPersegi($sisi);
	$kel_persegi = KelPersegi($sisi);
}else{
	$luas_persegi = 0;
	$kel_persegi = 0;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lingkaran</title>
</head>
<body>

	<form action="" method="post">
		Sisi : <input type="number" name="sisi"><br>
		<input type="submit" name="persegi" value="Hitung">
	</form>
	<hr align="center">
	Luas Persegi  : <?=$luas_persegi;?>
	Keliling Persegi : <?=$kel_persegi;?>

</body>
</html>
