<html>
	<head>
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<style type="text/css">
			body{width: 100%; height: auto; margin: auto; padding-bottom: 20px;}
			article{width: 100%; max-width: 800px; background-color: rgba(204, 204, 204, 0.4); height: auto; margin: auto; margin-top: 10vh; margin-bottom: 30px;}
			form{margin: auto; width: 96%;}
			label{margin: 10px; font-weight: bold; font-family: calibri; font-size: 18px; display: inline-block; width: 90%; max-width: 200px;}
			label input{margin: 10px auto; outline: none; border: none; padding: 5px; width: 90%; max-width: 200px;}
			.image{all: initial;}
			.image input{display: none;}
			.image img{margin: 20px; width: 110px; height: 110px; object-fit: cover;}
			input[type=submit]{margin: 30px auto; border: 2px black solid; color: black; background-color: transparent; padding: 6px 10px;
				font-weight: bolder; border-radius: 10px; font-size: 20px; outline: none;}
			input[type=submit]:hover{border-color: blue; color: blue;}
			a{text-align: center; margin: 30px auto; text-decoration: none; color: blue; font-size: 18px; font-weight: bold;}
			select{border:none;}
		</style>
	</head>
	<body>
		<article>
			<form action = "registerphp.php" method = "post" enctype = "multipart/form-data">
				<center>
					<label class = "image">
						<img alt = "Click here to upload your profile picture" id = "pass1">
						<input type = "file" onchange = "pas1()" accept = "image/*"  name = "passport" required>
					</label>
				</center>
				<fieldset class = "name">
					<legend>Personal Details</legend>
					<label>
						Surname:
						<input type = "text" name = "surname" required>
					</label>
					<label>
						First Name:
						<input type = "text" name = "firstName" required>
					</label>
					<label>
						Middle Name:
						<input type = "text" name = "middleName" required>
					</label>
					<label>
						Phone No.:
						<input type = "number" name = "phoneNo" placeholder = "E.g. 08167484108" required>
					</label>
					<label>
						Gender:
						<select name = "gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					</label>
					<label>
						Account type:
						<select name = "type" required>
							<option></option>
							<option>Admin</option>
							<option>User</option>
						</select>
					</label>
					<label>
						Email:
						<input type = "email" name = "email" placeholder = "Enter your email address" required>
					</label>
					<label>
						Password:
						<input type = "password" name = "password" id = "word" placeholder = "*******" required>
					</label>
					<label>
						Confirm Password:
						<input type = "password" name = "confirmPassword" onkeyup = "check(this)" placeholder = "*******" required>
					</label>
				</fieldset><br>
					<center>
						<input type = "submit" value = "submit" id = "submit">
					</center>
			</form>
		</article>
		<center>
			<a href="index.php">Home</a>
		</center>
	</body>
	<script type="text/javascript">
		var pass1 = document.getElementById('pass1');
		var word = document.getElementById('word');
		var submit = document.getElementById('submit');
		function pas1() {
			pass1.src = URL.createObjectURL(event.target.files[0]);
		}

		function check (password){
			if(word.value == password.value || password.value == ""){
				password.style.backgroundColor = "white";
				password.style.color = "black";
				submit.disabled = "";
			}
			else{
				password.style.color = "white";
				password.style.backgroundColor = "pink";
				submit.disabled = "true";
			}
		}
	</script>
</html>