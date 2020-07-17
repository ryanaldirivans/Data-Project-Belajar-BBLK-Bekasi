<?php 
require_once "koneksi.php";
$email = $_POST['emailUser'];
$nama = $_POST['namaUser'];
$password = md5($_POST['passwordUser']);

$sql = "SELECT email_user, nama_user, password_user FROM tb_user WHERE nama_user='$nama' AND password_user='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	echo "<script>alert('Login Berhasil! Selamat datang $nama')</script>";
	echo "<script>window.location.assign('admin/index.php')</script>";
}else{
	echo "<script>alert('Login Gagal $conn->error')</script>";
	echo "<script>window.location.assign('index.php?page=login')</script>";
}

?>


