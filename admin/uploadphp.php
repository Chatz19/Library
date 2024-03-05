<?php
require_once '../config/connect.php';
$title = htmlentities(mysqli_real_escape_string($connection, $_POST['title']));
$author = htmlentities(mysqli_real_escape_string($connection, $_POST['author']));
$isbn = htmlentities(mysqli_real_escape_string($connection, $_POST['isbn']));
$edition = htmlentities(mysqli_real_escape_string($connection, $_POST['edition']));
$publisher = htmlentities(mysqli_real_escape_string($connection, $_POST['publisher']));

	if(isset($_FILES) && !empty($_FILES)){
		$fileName = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
		$fileTmp = $_FILES['file']['tmp_name'];

		$ext = substr($fileName, strripos($fileName, '.') + 1);
		$fileType = substr_replace($fileType, '', strripos($fileType, '/'));
		$location = '../image/';
		$fileName = str_shuffle(md5($fileName)).".".$ext;
		move_uploaded_file($fileTmp, $location.$fileName);

		$sql = "INSERT INTO media (media, type, author, title, ISBN, edition, publisher) 
									VALUES ('$fileName', '$fileType', '$author', '$title', '$isbn', '$edition', '$publisher')";
		$result = mysqli_query($connection, $sql);
		if($result){
			echo '<script>alert("Uploaded"); window.location.assign("http:index.php"); </script>';
		}
		else{
			echo '<script>alert("Failed"); window.location.assign("http:upload.php"); </script>';
		}
	}
	else{
		echo '<script>alert("Pls, select a file"); window.location.assign("http:upload.php"); </script>';
	}
?>