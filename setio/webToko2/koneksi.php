<?php  

$serverName = "localhost";
$userName = "root";
$password = "Tio1234";
$dbName = "db_toko_tio";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error){
	die("Koneksi gagal");
}
?>