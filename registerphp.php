<?php
	require_once 'config/connect.php';

	$surname = htmlentities(mysqli_real_escape_string($connection, $_POST['surname']));
	$firstName = htmlentities(mysqli_real_escape_string($connection, $_POST['firstName']));
	$middleName = htmlentities(mysqli_real_escape_string($connection, $_POST['middleName']));
	$phoneNo = htmlentities(mysqli_real_escape_string($connection, $_POST['phoneNo']));
	$gender = htmlentities(mysqli_real_escape_string($connection, $_POST['gender']));
	$type = htmlentities(mysqli_real_escape_string($connection, $_POST['type']));
	$email = htmlentities(mysqli_real_escape_string($connection, $_POST['email']));
	$password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));

	$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count > 0){
	$msg = '<script>alert("The email address has been registered"); window.location.assign("http:register.php"); </script>';
	echo $msg;
	die();
}

	if(isset($_FILES) && !empty($_FILES)){
		$fileName = $_FILES['passport']['name'];
		$fileType = $_FILES['passport']['type'];
		$fileTmp = $_FILES['passport']['tmp_name'];

		$fileExt = strtoupper(substr($fileName, stripos($fileName, '.') + 1));
		$fileType = substr_replace($fileType, '', stripos($fileType, '/'));

		if($fileType == "image" && ($fileExt == "JPG" || $fileExt == "PNG")){
			$location = 'image/';
			$fileName = str_shuffle(md5($fileName)).".".strtolower($fileExt);
			move_uploaded_file($fileTmp, $location.$fileName);

			$sql = "INSERT INTO users (surname, firstName, middleName, phoneNo, gender, accountType, email, password, image)
						VALUES ('$surname', '$firstName', '$middleName', '$phoneNo', '$gender', '$type', '$email', '$password', '$fileName')";
			if(mysqli_query($connection, $sql)){
				header('location: index.php');
			}
			else{
				echo '<script>alert("failed"); window.location.assign("http:index.php"); </script>';
			}
		}
		else{
			echo '<script>alert("Upload image with JPG or PNG extension"); window.location.assign("http:register.php"); </script>';
		}
	}
	else{
		echo '<script>alert("Pls, select a file"); window.location.assign("http:register.php"); </script>';
	}
?>