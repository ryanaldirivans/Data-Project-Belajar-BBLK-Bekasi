<?php  
//memasukkan nilai ke dalam array
$mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//kunci atau key pada array diurutkan secara Descending
krsort($mobil);

//dengan looping menampilkan tiap nilai dengan array
foreach ($mobil as $x => $nilai_x) {
	echo "Kunci=" . $x .", Nilainya" . $nilai_x;
	echo "<br/>";
}

?>