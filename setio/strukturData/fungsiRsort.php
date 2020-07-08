<?php  
//masukkan nilai dalam array
$mobil=array("Volvo","BMW","Toyota");

//array diurutkan secara descending
rsort($mobil);

//mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilaidari array
for($x=0; $x < $length; $x++){
	echo $mobil[$x];
	echo "<br/>";
}

?>