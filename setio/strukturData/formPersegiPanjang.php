<?php 
include_once 'myFunction.php';
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
	<form action="" method="post">
		Panjang : <input type="text" name="panjang"><br>
		Lebar : <input type="text" name="lebar"><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<hr>
	Luas Persegi Panjang : <?=$luasPersegiP;?>
	Keliling Persegi Panjang : <?=$KelPersegiP;?>
</body>
</html>