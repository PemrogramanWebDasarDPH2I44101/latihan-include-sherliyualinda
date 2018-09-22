<?php
session_start();
$username = $_SESSION['username']; 
$akses = $_SESSION ['akses'];
print_r($_SESSION);
include 'header.php';
if ($akses!='admin') {
	echo "halaman boleh diakses, hai $username";
}else{
	header('location: form.php');
}
	 include 'footer.php'; 
?>