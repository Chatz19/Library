<?php
	require_once 'config/connect.php';
	session_start();
	$email = htmlentities(mysqli_real_escape_string($connection, $_POST['email']));
	$password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));

	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if($count == 1){
		if($r = mysqli_fetch_assoc($result)){
			if($r['approved'] == 1){
				if($r['blocked'] == 0){
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					$_SESSION['admin'] = $r['accountType'];
					if(strtolower($r['accountType']) == "admin"){
						header('location: admin/');
					}
					else{
						header('location: user/');
					}
				}
				else{
					echo '<script>alert("This account has been blocked"); window.location.assign("http:index.php"); </script>';
				}
			}
			else{
				echo '<script>alert("Account has not been approved"); window.location.assign("http:index.php"); </script>';
			}
		}
	}
	else{
		echo '<script>alert("Invalid login parameters"); window.location.assign("http:index.php"); </script>';
	}
?>