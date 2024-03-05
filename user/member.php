<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Member</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="style/body.css">
		<style type="text/css">
			article section{display: flex; flex-flow: row wrap; justify-content: flex-start;
								align-content: flex-start; box-sizing: border-box;}
			article section div{height: 350px; width: 250px; margin: 0; margin-bottom: 20px; box-shadow: 2px 2px 6px black; margin-left: 20px; 
									background-color: white; position: relative;}
			article p{margin-top: 80px; width: auto; font-size: 24px; font-family: arial; margin-bottom: 0; margin-left: 20px; margin-bottom: 40px;}
			article p span{all: unset; font-size: 16px; color: #999; margin-left: 10px;}
			.image{width: 100%; height: 180px; object-fit: cover; object-position: 0% 0%; margin-bottom: 10px;}
			.inner{all: initial; margin-left: 20px; display: block; font-size: 18px; font-family: calibri; font-weight: bold; text-transform: capitalize;}
			.inner span{font-weight: normal;}
			div a{padding: 5px 10px; background-color: blue; color: white; text-decoration: none; border-radius: 3px; position: absolute; bottom: 10px; 
					left: 20px;}
			p input{width: 90%; max-width: 350px; height: 30px;}
		</style>
	</head>
	<body>
		<header><span onclick = "aside1()">&#9776</span>Digital Library System</header>
		<aside id = "aside">
			<div><center><img src="../image/back2.jpg"></center></div>
			<section>
				<a href="index.php">Dashboard</a>
				<a href="member.php" class = "active">Members</a>
				<a href="book.php">Books</a>
				<a href="video.php">Videos</a>
				<a href="image.php">Images</a>
				<a href="detail.php">Check Profile</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<p><input type = "search" placeholder = "Quick Search"></p>
			<section>
				<?php 
				$sql = "SELECT * FROM users WHERE email != '$email' AND password != '$password' ORDER BY dateCreated DESC";
				$result = mysqli_query($connection, $sql);
				while($r = mysqli_fetch_assoc($result)){
				?>
				<div>
					<img src="../image/<?php echo $r['image']; ?>" class = "image">
					<div class = "inner"><?php echo $r['surname']." ".$r['firstName']; ?></div>
					<div class = "inner">Phone No: <span><?php echo $r['phoneNo']; ?></span></div>
					<div class = "inner">Account Type: <span><?php echo $r['accountType']; ?></span></div>
					<div class = "inner">Approved: <span><?php echo $retVal = ($r['approved'] == 1) ? "yes" : "no" ;?></span></div>
					<div class = "inner">Blocked: <span><?php echo $retVal = ($r['blocked'] == 1) ? "yes" : "no" ;?></span></div>
					<a href="memberDetail.php?id=<?php echo $r['user_ID']; ?>">See Profile</a>
				</div>
				<?php } ?>
			</section>
			<footer>Digital Library System Brought To You By <span>Group 12</span></footer>
		</article>
	</body>
	<script type="text/javascript">
	article = document.getElementById('article');
	aside = document.getElementById('aside');
	function aside1(){
		aside.classList.toggle("aside");
		article.classList.toggle("article");
	}
	</script>
</html>