<?php
session_start();
$username = $_SESSION['username']; 
$akses = $_SESSION ['akses'];
//print_t($_SESSION);
include 'header.php';
if ($akses=='admin') {
	echo "<font size='20'>halaman boleh diakses, hai $username</font>";
}else{
	header('location: form.php');
}

	 include 'footer.php'; 

?>