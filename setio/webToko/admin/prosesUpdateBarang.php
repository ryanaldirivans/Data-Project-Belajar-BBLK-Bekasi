<?php  
require_once "koneksi.php";
$id = $_POST['idBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$harga = $_POST['hargaBarang'];

$sql = "UPDATE tb_barang SET nama_barang='$nama', satuan_barang='$satuan', harga_barang='$harga' WHERE id_barang='$id'";

if ($conn->query($sql) === TRUE){
	echo "<script>alert('Data Berhasil Di update')</script>";
	echo "<script>window.location.assign('index.php?page=formInputBarang')</script>";
}else{
	echo "<script>alert('Data Gagal Di update $conn->error')</script>";
	echo "<script>window.location.assign('index.php?page=formInputBarang')</script>";
}

?>