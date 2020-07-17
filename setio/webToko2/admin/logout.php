<?php
session_start();
    //logout
session_destroy();
    // arahkan ke halaman index.php 
echo "<script>alert('Anda berhasil Logout!')</script>";
echo "<script>window.location.assign('../index.php?page=logout')</script>";
?>