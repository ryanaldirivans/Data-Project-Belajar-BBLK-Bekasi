<?php  
//memasukkan nilai array ke dalam array
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//nilai pada array diurutkan secara Ascending
asort($mobil);

//Dengan looping manampilkan tiap nilai dengan array
foreach ($mobil as $x => $nilai_x) {
	echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
	echo "<br/>";
}


?>