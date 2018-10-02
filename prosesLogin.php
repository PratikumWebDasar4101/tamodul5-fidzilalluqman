<?php  
session_start();
error_reporting(0);
$user = array(
				"username" => "admin",
				"password" => "admin"
			);
if (isset($_POST['submit'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: registrasi.php");
	}else{
		echo "Username atau Password Tidak Benar";
	}
}
?>
