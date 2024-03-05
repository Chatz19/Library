<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<style type="text/css">
		body{background-image: url(image/back2.jpg); background-position: 50%; background-repeat: no-repeat; background-size: cover; 
			width: 100%; height: 100%; margin: 0; display: flex; align-items:center; justify-content:center; font-family: calibri;}
		article{width: 100%; max-width: 500px; height: auto; background-color: rgba(0, 0, 0, 0.4); box-shadow: 3px 3px 6px black; overflow: hidden;}
		header{color: white; font-size: 40px; margin: 30px auto; font-weight: bold; text-align: center;}
		form{width: 100%; font-weight: bold; font-size: 20px; color: white;}
		section input{border: 2px #00ff00 solid; background-color: rgba(0, 0, 0, 0.3); color: white; outline: none; padding: 10px; font-size: 16px;
			font-family: courier; width: 254px; transition:1s; border-radius: 10px 0px 10px 0px; margin-top: 2px; max-width: 350px;}
		section input::placeholder{color: #d9d9d9;}
		section input:focus{width: 96%; max-width: 350px; border-color: #ffff00;}
		section{margin: 20px;}
		div{margin: 50px 20px; display: flex; justify-content: space-between;}
		div input{background-color: transparent; border: 2px #00ff00 solid; color: #33ff33; font-weight: bold; font-family: courier; font-size: 18px; 
			padding: 5px 10px; cursor: pointer; outline: none; transition:1s;}
		div input:hover{border-color: #ffff00; color: #ffff00;}
		div a{text-decoration: none; color: #3f3;}
		div a:hover{color: #ccff66;}
		p{color: white; font-size: 20px; text-align: center;}
		p a{color: #ffff00; text-decoration: none; font-weight: bold; font-style: italic;}
	</style>
</head>
<body>
	<article>
		<header>Login</header>
		<form action = "login.php" method = "post">
			<section>
			Email: <br>
			<input type = "email" name = "email" autocomplete = "off" placeholder = "Enter your email address" required><br><br>
			Password: <br>
			<input type = "password" name = "password" placeholder = "********" required>
		</section>
		<div>
			<input type = "submit" value = "Login">
			<a href="forget.php">Forgot password</a>
		</div>
		</form>
		<p>
			click <a href="register.php">here</a> to create account
		</p>
	</article>
</body>
<html>