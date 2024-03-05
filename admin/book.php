<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Books</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="style/body.css">
		<style type="text/css">
			article section{box-sizing: border-box; padding-top: 60px;}
			article section div{height: auto; background-color: white; width: auto; max-width: 100vw; max-height: auto; display: inline-block; margin: 10px;}
			article section div p{width: 100%; height: auto;}
			iframe{height: 250px; width: auto; max-width: 100vw; max-height: auto; object-position:10%;}
			p span{margin: 5px; font-weight: bold;}
			.a{padding: 5px; background-color: blue; color: white; font-weight: bold; text-decoration: none; margin: 10px;}
		</style>
	</head>
	<body>
		<header><span onclick = "aside1()">&#9776</span>Digital Library System</header>
		<aside id = "aside">
			<div><center><img src="../image/back2.jpg"></center></div>
			<section>
				<a href="index.php">Dashboard</a>
				<a href="member.php">Members</a>
				<a href="book.php" class = "active">Books</a>
				<a href="video.php">Videos</a>
				<a href="image.php">Images</a>
				<a href="upload.php">Upload</a>
				<a href="detail.php">Check Profile</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				<?php 
				$sql = "SELECT * FROM media WHERE type = 'application' ORDER BY dateCreated DESC";
				$result = mysqli_query($connection, $sql);
				while($r = mysqli_fetch_assoc($result)){
				?>
				<div>
					<iframe src = "../image/<?php echo $r['media']; ?>"></iframe>
					<p>
						<span>Title: </span><?php echo ucfirst($r['title']); ?><br>
						<span style = "text-transform: capitalize;">Author: </span><?php echo ucfirst($r['author']); ?><br>
						<span title = "International Standart Book Number">ISBN: </span><?php echo $r['ISBN']; ?><br>
						<span>Publisher: </span><?php echo ucfirst($r['publisher']); ?><br>
						<span>Edition: </span><?php echo $r['edition']; ?><br>
						<?php $fileExt = ".".substr($r['media'], stripos($r['media'], '.') + 1); ?>
						<center>
							<a class = "a" href="../image/<?php echo $r['media']; ?>" download = "<?php echo ucfirst($r['title']).$fileExt; ?>">Download</a>
						</center>
					</p>
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