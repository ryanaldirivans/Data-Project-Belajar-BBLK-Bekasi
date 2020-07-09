<?php  
function hitungLuaslingkaran($r){
	$luas = 3.14 * $r * $r;
	return $luas;
}
function hitungKelLingkaran($r){
	$kel = 3.14 *2 * $r;
	return $kel;
}

function luasPersegiPanjang($panjang, $lebar){
	$luasPersegiP = $panjang * $lebar;
	return $luasPersegiP;
}
function KelilingPersegiPanjang($panjang, $lebar){
	$KelPersegiP = ($panjang * 2) + ($lebar * 2);
	return $KelPersegiP;
}

function luasPersegi($sisi){
	$luas_persegi = $sisi * $sisi;
	return $luas_persegi;
}

function KelPersegi($sisi){
	$kel_persegi = 4 * $sisi;
	return $kel_persegi;
}
?>