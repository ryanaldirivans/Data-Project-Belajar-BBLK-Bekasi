<?php  
//memasukkan nilai ke dalam array
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//key atau kunci pada array diurutkan secara Ascending
ksort($mobil);

//dengan looping menmpiklan tiap nilai dari array
foreach ($mobil as $x => $nilai_x) {
	echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
	echo "</br>";
}

?>