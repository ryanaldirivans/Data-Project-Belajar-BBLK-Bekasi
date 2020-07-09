<?php  
$bayar=$_POST['bayar'];
$total_harga = $_POST['total_harga'];
$uangKembali = number_format($bayar-$total_harga,0,",",".");


if ($bayar>$total_harga){
	echo "<script>alert('Terimakasih, Uang kembalian anda sebesar Rp.$uangKembali')</script>";
	echo "<script>window.location.assign('formPenjualan.php')</script>";
}elseif($bayar<$total_harga){
	echo "<script>alert('Maaf uang Anda kurang')</script>";
	echo "<script>window.history.back()</script>";
}else{
	echo "<script>alert('Uang Anda Pas!Terimakasih telah berbelanja!')</script>";
	echo "<script>window.location.assign('formPenjualan.php')</script>";
}
?>
