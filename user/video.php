<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Videos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="style/body.css">
		<style type="text/css">
			article section{box-sizing: border-box; padding-top: 60px;}
			article section div{height: auto; width: auto; max-width: 100vw; max-height: auto; display: inline-block; margin: 10px; position: relative;}
			article section div video{height: 250px; width: auto; max-width: 100vw; max-height: auto;}
			article section div p{background-color: rgb( 0, 0, 0, 0.4); width: 100%; height: 100%; position: absolute; top: -16px; left: 0; 
									display: none; text-align: center;}
			article section div:hover p{display: block;}
			article section div p span{color: white; font-weight: bold; position: absolute; bottom: 0px; left: 0px; text-align: center; width: 100%;
										background-color: rgb( 0, 0, 0, 0.5); padding-bottom: 5px; text-trnsform: capitalize;}
		</style>
	</head>
	<body>
		<header><span onclick = "aside1()">&#9776</span>Digital Library System</header>
		<aside id = "aside">
			<div><center><img src="../image/back2.jpg"></center></div>
			<section>
				<a href="index.php">Dashboard</a>
				<a href="member.php">Members</a>
				<a href="book.php">Books</a>
				<a href="video.php" class = "active">Videos</a>
				<a href="image.php">Images</a>
				<a href="detail.php">Check Profile</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				<?php 
				$sql = "SELECT * FROM media WHERE type = 'video' ORDER BY dateCreated DESC";
				$result = mysqli_query($connection, $sql);
				while($r = mysqli_fetch_assoc($result)){
				?>
				<div name = "video" id = "../image/<?php echo $r['media']; ?>">
					<video src = "../image/<?php echo $r['media']; ?>"></video>
					<p>
						<span><?php echo ucfirst($r['title']).$retVal = (empty($r['author'])) ? "" : " by ".ucfirst($r['author']); ?></span>
					</p>
				</div><center><?php include 'vidmate.php'; ?></center>
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