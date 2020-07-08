<!-- <?php
for ($i= 1; $i <= 10; $i++)
{
	echo "*";
}
?> -->  

<!-- untuk menampilkan bintang segitiga siku -->
<?php 
for ($i=1; $i<=$_POST['bintang']; $i++){
	for ($j=$i; $j>=1; $j--){
		echo "*";
	}echo "<br>";
}


// for ($i=1; $i<=4; $i++)//$i<=4 untuk menampilkan jumlah baris ke bawah
// {
// 	for ($j=5; $j>=$i; $j--){
// 		echo $j;
// 	}echo "<br>";
// }

// // for ($a=1; $a<=5; $a++){
// // 	for ($b=1; $b<=5; $b++){
// // 		echo "*";
// // 	}echo "<br>";
// // }

// for ($i=5; $i>=1; $i--){
// 	for ($j=5; $j>=$i; $j--){
// 		echo $j;
// 	}echo "<br>";
// }

?>