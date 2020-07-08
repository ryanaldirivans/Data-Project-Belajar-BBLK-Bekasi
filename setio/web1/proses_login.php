<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	$username = $_POST['username1'];
	$password = $_POST['password1'];
	
	if ($username=='username1'){
		if($password=='password1'){
			echo "Selamat Datang, Anda berhasil login!";
		}else{ 
			echo "Password salah";
		}
	}else{
		echo "username yang anda masukkan salah";
	} 
	?>
</body>
</html>