<?php 

session_start();
unset($_SESSION['user']);
echo "<script>alert('Anda Berhasil Logout');</script>";
echo "<script>location = 'login.php';</script>";

?>