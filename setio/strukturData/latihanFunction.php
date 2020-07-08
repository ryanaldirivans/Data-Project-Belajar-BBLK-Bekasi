<?php  
function perkenalan(){
	echo "Hallo perkenalkan nama saya Tomi <br>";
	echo "Senang berkenalan dengan Anda <br>";
	echo "Sampai berjumpa lagi <br>";
	echo "<hr>";
}
//function dengan parameter
function perkenalanKedua($nama="Fulan", $salam="Assalamualaikum"){
	echo "$salam, perkenalkan nama saya $nama <br>";
	echo "Senang berkenalan denga Anda <br>";
	echo "Sampai berjumpa kembali <br>";
	echo "<hr>";
}

//pemanggilan fungsi
perkenalan();
perkenalanKedua("Sonny", "Selamat Pagi");
// perkenalanKedua("Nita", "Assalamualaikum");
// perkenalanKedua("Sinta", "Salam sukses");
perkenalanKedua("Ali");
perkenalanKedua();

//function mengembalikan nilai
function hitungLuasSegiTiga($alas, $tinggi){
	$luas = $alas * $tinggi / 2;
	return $luas;
}
function hitungKelilingSegiTiga($a, $b, $c){
	$kel = $a +$b +$c;
	return $kel;
}

echo "Luas segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah:".hitungLuasSegiTiga(3, 4)."<br>";
echo "Keliling segitiga dengan sisi 4cm 5cm 6cm adalah:".hitungKelilingSegiTiga(4, 5, 6)."<br>";

function hitungUmur($tahunLahir, $tahunSekarang){
	$umur = $tahunSekarang - $tahunLahir;
	return $umur;
}
$tahunSekarang = date ('Y');
echo "Umur saya adalah".hitungUmur(2000, $tahunSekarang)."<br>";



?>