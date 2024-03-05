<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="style/body.css">
		<style type="text/css">
			article section{display: flex; flex-flow: row wrap; justify-content: space-between; align-content: flex-start; box-sizing: border-box;}
			article section div{height: 150px; width: 24%; margin: 0; margin-bottom: 20px;}
			article p{margin-top: 80px; width: 260px; font-size: 24px; font-family: arial; margin-bottom: 0; margin-left: 20px;}
			article p span{all: unset; font-size: 16px; color: #999; margin-left: 10px;}
			.book{background-color: rgb(0, 153, 255); border-radius: 0px 5px 5px 0px; position: relative;}
			.video{border-radius: 5px; position: relative; background-color: #1e7b1e;}
			.image{border-radius: 5px; position: relative; background-color: #ff9900;}
			.member{border-radius: 5px 0px 0px 5px; position: relative; background-color: #e60000;}
			div .img{position: absolute; right: 5px; top: 8%;}
			div section{all: unset; box-sizing: border-box; padding: 20px;}
			div section div{all: unset; clear: both; margin: 20px; font-size: 22px; color: white;}
			div a{text-decoration: none; position: absolute; bottom: 0; left: 0; text-align: center; padding: 6px 0px; width: 100%; 
					background-color: rgb(0, 0, 0, 0.5); color: rgb(255, 255, 255, 0.6);}
			div a:hover{color: white;}

			@media only screen and (max-width: 1100px){
				article section div{width: 48%;}
			}
			@media only screen and (max-width: 800px){
				div .img{display: none;}
				div section{display: block; width: 100%;}
				div section div{width: 100%; display: block; margin: 0 auto; margin-bottom: 20px; text-align: center;}
				br{display: none;}
			}
		</style>
	</head>
	<body>
		<header><span onclick = "aside1()">&#9776</span>Digital Library System</header>
		<aside id = "aside">
			<?php 
			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($connection, $sql);
			if($r = mysqli_fetch_assoc($result)){
				$picture = $r['image'];	
			}
			?>
			<div><center><img src="../image/<?php echo $picture; ?>"></center></div>
			<section>
				<a href="index.php" class = "active">Dashboard</a>
				<a href="member.php">Members</a>
				<a href="book.php">Books</a>
				<a href="video.php">Videos</a>
				<a href="image.php">Images</a>
				<a href="detail.php">Check Profile</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<p>Digital Library <span>Control panel</span></p>
			<section>
				<div class = "book">
					<section>
						<?php 
						$sql = "SELECT * FROM media WHERE type = 'application'";
						$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
						$count = mysqli_num_rows($result);
						?>
						<br><div style = "font-size: 30px; font-weight: bold;"><?php echo $count; ?></div><br><br><div>Books</div>
					</section>
					<img class = "img" src="../image/book.png" style = "height: 70%; width: auto;">
					<a href="book.php">More info <span>&#8594</span></a>
				</div>

				<div class = "video">
					<section>
						<?php 
						$sql = "SELECT * FROM media WHERE type = 'video'";
						$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
						$count = mysqli_num_rows($result);
						?>
						<br><div style = "font-size: 30px; font-weight: bold;"><?php echo $count; ?></div><br><br><div>Videos</div>
					</section>
					<img class = "img" src="../image/video.png" style = "height: 70%; width: auto;">
					<a href="video.php">More info <span>&#8594</span></a>
				</div>

				<div class = "image">
					<section>
						<?php 
						$sql = "SELECT * FROM media WHERE type = 'image'";
						$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
						$count = mysqli_num_rows($result);
						?>
						<br><div style = "font-size: 30px; font-weight: bold;"><?php echo $count; ?></div><br><br><div>Images</div>
					</section>
					<img class = "img" src="../image/image.png" style = "height: 70%; width: auto;">
					<a href="image.php">More info <span>&#8594</span></a>
				</div>

				<div class = "member">
					<section>
						<?php 
						$sql = "SELECT * FROM users";
						$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
						$count = mysqli_num_rows($result);
						?>
						<br><div style = "font-size: 30px; font-weight: bold;"><?php echo $count; ?></div><br><br><div>Members</div>
					</section>
					<img class = "img" src="../image/member.png" style = "height: auto; width: 30%; margin-top:20px;">
					<a href="member.php">More info <span>&#8594</span></a>
				</div>
			</section>
			<footer>Digital Library System Brought To You By <span>Group 12</span></footer>
		</article>
	</body>
	<script type="text/javascript">
	//1100
	article = document.getElementById('article');
	aside = document.getElementById('aside');
	function aside1(){
		aside.classList.toggle("aside");
		article.classList.toggle("article");
	}
	</script>
</html>