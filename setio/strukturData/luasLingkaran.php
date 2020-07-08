<?php  
define('phi', 3.14);
$radius = $_POST['r'];
$keliling = 2*phi*$radius;
$luas = 0.5*phi*$radius;
echo $keliling . $luas;

?>