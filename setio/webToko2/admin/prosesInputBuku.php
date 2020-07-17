<?php  
require_once "koneksi.php";
$nama_buku = $_POST['namaBuku'];
$nama_penerbit = $_POST['namaPenerbit'];
$nama_penulis = $_POST['namaPenulis'];
$tahun_terbit = $_POST['tahunTerbit'];

$sql = "INSERT INTO tb_buku VALUES(null,'$nama_buku','$nama_penerbit','$nama_penulis','$tahun_terbit')";

if ($conn->query($sql) === TRUE){
	echo "<script>alert('Data Berhasil Disimpan')</script>";
	echo "<script>window.location.assign('index.php?page=buku')</script>";
}else{
	echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
	echo "<script>window.location.assign('index.php?page=buku')</script>";
}

?>