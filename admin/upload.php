<?php
 	require_once 'loader.php';
?>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="style/body.css">
		<style type="text/css">
			article section{box-sizing: border-box; padding: 100px 0px;}
			input{height: 30px; border: none; border-bottom: 1px solid black; outline: none; background-color: transparent;}
			input[type=file]{all: unset;}
			label{padding: 2px; background-color: blue; color: white;}
			input[type=submit]{all: unset; background-color: blue; color: white; padding: 5px 8px; font-weight: bold;}
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
				<a href="index.php">Dashboard</a>
				<a href="member.php">Members</a>
				<a href="book.php">Books</a>
				<a href="video.php">Videos</a>
				<a href="image.php">Images</a>
				<a href="upload.php" class = "active">Upload</a>
				<a href="detail.php">Check Profile</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				<table>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>ISBN</th>
						<th>Edition</th>
						<th>Publisher</th>
						<th>File</th>
					</tr>
					<form action = "uploadphp.php" method = "post" enctype = "multipart/form-data">
						<tr>
							<td><input type = "text" name = "title" required></td>
							<td><input type = "text" name = "author"></td>
							<td><input type = "text" name = "isbn"></td>
							<td><input type = "text" name = "edition"></td>
							<td><input type = "text" name = "publisher"></td>
							<td><input type = "file" name = "file" required></td>
						</tr>
						<tr><td colspan = "6" align = "center" style ="padding-top: 50px;"><input type = "submit" value = "Upload"></td></tr>
					</form>
				</table>
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