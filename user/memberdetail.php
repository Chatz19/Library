<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Details</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<style type="text/css">
			body{width: 100%; height: auto; margin: auto; padding-bottom: 20px;}
			article{width: 100%; max-width: 800px; background-color: rgb(204, 204, 204, 0.4); height: auto; margin: auto; margin-top: 10vh; margin-bottom: 30px;}
			form{margin: auto; width: 96%; padding-bottom: 20px;}
			label{margin: 10px; font-weight: bold; font-family: calibri; font-size: 18px; display: inline-block; width: 90%; max-width: 200px;}
			label input[disabled]{margin: 10px auto; outline: none; border: none; padding: 5px; width: 90%; max-width: 200px; background-color: white; 
									color: black; font-weight: bold;}
			.image{all: initial;}
			.image input{display: none;}
			.image img{margin: 20px; width: 110px; height: 110px; object-fit: cover;}
			a{text-align: center; margin: 30px auto; text-decoration: none; color: blue; font-size: 18px; font-weight: bold;}
			div{width: 100%; height: auto; margin: 20px 0px;}
			div a{all: initial; color: black; border-radius: 10px; border: 2px solid black; padding: 10px; font-weight: bold; margin: 0px 10px; cursor: pointer;}
			div a:hover{border-color: darkred; color: darkred;}
		</style>
	</head>
	<body>
		<?php 
		$id = htmlentities(mysqli_real_escape_string($connection, $_GET['id']));
		?>
		<article>
			<?php 
			$sql = "SELECT * FROM users WHERE user_ID = '$id'";
			$result = mysqli_query($connection, $sql);
			while($r = mysqli_fetch_assoc($result)){
			?>
			<form disabled>
				<center>
					<label class = "image">
						<img src = "../image/<?php echo $r['image']; ?>" alt = "Profile Picture">
					</label>
				</center>
				<fieldset class = "name">
					<legend>Personal Details</legend>
					<label>
						Surname:
						<input type = "text" value = "<?php echo $r['surname']; ?>" disabled>
					</label>
					<label>
						First Name:
						<input type = "text" value = "<?php echo $r['firstName']; ?>" disabled>
					</label>
					<label>
						Middle Name:
						<input type = "text" value = "<?php echo $r['middleName']; ?>" disabled>
					</label>
					<label>
						Phone No.:
						<input type = "number" value = "<?php echo $r['phoneNo']; ?>" disabled>
					</label>
					<label>
						Gender:
						<input type = "text" value = "<?php echo $r['gender']; ?>" disabled>
					</label>
					<label>
						Account type:
						<input type = "text" value = "<?php echo $r['accountType']; ?>" disabled>
					</label>
					<label>
						Email:
						<textarea disabled style = "background:white; color:black; border:none;"><?php echo $r['email']; ?></textarea>
					</label>
					<label>
						Accepted:
						<input type = "text" value = "<?php echo $retVal = ($r['approved'] == 1) ? "Yes" :"No" ; ?>" disabled>
					</label>
					<label>
						Blocked:
						<input type = "text" value = "<?php echo $retVal = ($r['blocked'] == 1) ? "Yes" :"No" ; ?>" disabled>
					</label>
			</form>
			<?php } ?>
		</article>
		<center>
			<a href="index.php">Home</a>
		</center>
	</body>
</html>