<?php
session_start();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$akses = $_POST['akses'];
	$iduser = "";
	$_SESSION ['nama'] = $nama;
	$_SESSION ['akses'] = $akses;
	$_SESSION ['iduser'] = $iduser;
	//print_r($_SESSION);
}
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="hal2.php">Hal 2</a>
<a href="hal3.php">Hal 3</a>
<?php
	 include 'footer.php'; 
?>
</body>
</html>