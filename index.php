<?php
include "config/mysqli.php";  
if (isset($_SESSION['user'])) {
$role = $admin->get_role($_SESSION['user']['id']);
if ($role['keterangan_role'] =='Administator') 
 		{
echo "<script>location='admin/';</script>";
		}
	} else {
	echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
 	echo "<script>location='login.php';</script>";	
 	} 
?>