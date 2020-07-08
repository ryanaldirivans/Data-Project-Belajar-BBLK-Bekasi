<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	// $a = $_POST['angka'];
	// if($a>80) {
	// 	echo "variable a lebih kecil dari 10";
	// } else {
	// 	echo " variable a tidak lebih kecil dari 10";
	// }

	$a = $_POST['angka'];
	if ($a>80) {
		$grade = "A";
	} elseif($a>70){
		$grade = "B";
	} elseif($a>50){
		$grade = "C";
	} else { 
		$grade = "D";
	}
	echo "Nilai anda: $a<br>";
	echo "Grade: $grade";
	?>
	<br>
	<br>
	<button><a href="formPhp.php">Kembali</a></button>
</body>
</html>