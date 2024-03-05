<?php
 	require_once 'loader.php';
 	$id = htmlentities(mysqli_real_escape_string($connection, $_GET['id']));
 	$data = htmlentities(mysqli_real_escape_string($connection, $_GET['data']));

 	$sql = "UPDATE users SET approved = '$data' WHERE user_ID = '$id'";
 	$result = mysqli_query($connection, $sql);
 	if($result){
			echo '<script>alert("Updated"); window.location.assign("http:member.php"); </script>';
		}
		else{
			echo '<script>alert("Failed"); window.location.assign("http:member.php"); </script>';
		}
?>