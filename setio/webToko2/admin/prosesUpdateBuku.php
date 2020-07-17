<?php  
require_once "koneksi.php";
$id = $_POST['idBuku'];
$nama = $_POST['namaBuku'];
$penerbit = $_POST['namaPenerbit'];
$penulis = $_POST['namaPenulis'];
$tahun = $_POST['tahunTerbit'];

$sql = "UPDATE tb_buku SET nama_buku='$nama', nama_penerbit='$penerbit', nama_penulis='$penulis', tahun_terbit='$tahun' WHERE id_buku='$id'"; 
if ($conn->query($sql) === TRUE){
	echo "<script>alert('Data Berhasil Disimpan')</script>";
	echo "<script>window.location.assign('index.php?page=buku')</script>";
}else{
	echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
	echo "<script>window.location.assign('index.php?page=buku')</script>";
}

?>