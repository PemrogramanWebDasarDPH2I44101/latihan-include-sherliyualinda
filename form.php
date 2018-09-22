<?php
include 'header.php'; 
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sherli Yualinda</title>
	</head>
	<body>
		<center><form action="form.php" method="POST">
			<table>
				<tr>
					<td>
						Username <input type="text" name="username" placeholder="Username">
					</td>
				</tr>
				<tr>
					<td>
						Password <input type="password" name="password" placeholder="Password">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Login">
					</td>
				</tr>
			</table>
		</center></form>
	</body>
	</html>
<?php 
session_start();
$data = array(
			array(
				"id" => "1",
				"username" => "admin",
				"password" => "admin",
				"akses"=> "admin"
			),
			array(
				"id" => "2,",
				"username" => "sherli",
				"password" => "sherli11",
				"akses"=> "user"
			)
		);
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$num = 0;
	$data_valid = 0;
	while($num < count($data)){
		if($username == $data[$num]['username'] && $password == $data[$num]['password'] ){
			$_SESSION['username'] = $username;
			$_SESSION['akses'] = $data[$num]['akses'];
			$_SESSION['id'] = $data[$num]['id'];
			$data_valid = 1;
		}
		$num++;
	}
	if ($data_valid < 1) {
		echo "Login Gagal";
	} else {
		header('location: hal1.php');
	}
}
 include 'footer.php';

?>