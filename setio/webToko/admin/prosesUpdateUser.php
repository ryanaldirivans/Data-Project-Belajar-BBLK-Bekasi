<?php  
require_once "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];

$sql = "UPDATE tb_user SET nama_user='$nama', email_user='$email' WHERE id_user='$id'";

if ($conn->query($sql) === TRUE){
	echo "<script>alert('Data Berhasil Di update')</script>";
	echo "<script>window.location.assign('index.php?page=formInputUser')</script>";
}else{
	echo "<script>alert('Data Gagal Di update $conn->error')</script>";
	echo "<script>window.location.assign('index.php?page=formInputUser')</script>";
}

?>