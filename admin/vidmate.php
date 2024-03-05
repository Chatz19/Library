<html>
<head>

<style type="text/css">
.mode{ background-color: transparent; height: 96%; max-width: 100%; overflow: hidden; position: relative; margin:0px auto; margin-top: 2vh; text-align: center; vertical-align: middle; display: inline-block;
 -webkit-animation-name: examplk; -webkit-animation-duration:1s;}
		@-webkit-keyframes examplk{ from{transform:scale(0);   opacity: 0;} to{transform:scale(1); opacity: 1; }}
.closa{user-select:none;cursor: pointer; font-weight: bolder; color: white; background-color: red; height: 25px; width: 25px; font-size: 20px; text-align: center; margin-top: 50px; font-family: arial;z-index: 1;float: right; position: absolute; top: -50; right: 2px; }
#mode{ display: none;}
.sesl{width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); position: fixed; z-index: 999; top: -16px; left: -10px; padding-top: 0.5%;}
#vid{all: initial; max-height: 100%; max-width: 100%; min-width: 150px;}
.downloader{cursor: pointer; position: absolute; top: 0; left: 0; z-index: 1; display:none;}
.closar{width: 100%; height: 100%; position: absolute; z-index: -1;}
.dot1{clear: both; float: left; color: white;}
.dot1 span{all: initial; float: left; background-color: white; border: 1px solid black; padding: 3px; margin: 5px 2px; margin-top: 10px; border-radius: 100px;}
.download1{ background-color: white; font-family: none; padding: 2px; font-size: 18px; 
	box-shadow: 4px 4px 7px rgb(0,0,0,0.5);}
.dotmen1{position: absolute; left: 5px; top: 0; float: left; height: auto; z-index: 9; width: auto; user-select:none;}
#downgrade{color: black; display: none; margin-left: 10px; clear: both;}
		.mode::-webkit-scrollbar{width: 0px;}
		.mode::-webkit-scrollbar-track{background-color: #ccc;}
		.mode::-webkit-scrollbar-thumb{background-color: rgb(0,0,0,0.5); border-radius: 100px;}
		.mode::-webkit-scrollbar-thumb:hover{background-color: red;}
	.closara{width: 100%; height: 100%;}
	video{outline: none;}
</style>
</head>
<div class = "sesl" id="mode" >
	<div class = "closar" onclick = "those()"></div>
<div class = "mode" align = "center" >
	<div class = "dotmen1">
	<div class = "dot1" onclick = "document.getElementById('downgrade').style.display = 'block';"><span></span><span></span><span></span></div>
	<a href = "" download = "" id = "downgrade" onclick = "document.getElementById('downgrade').style.display = 'none';"><div class = "download1">Download</div></a>
	</div>
	<div onclick = "those()" class = "closa">x</div>
<video id = "vid" controls onclick = "document.getElementById('downgrade').style.display = 'none';"></video>
<div class = "closara" onclick = "those()"></div>
</div>
<?php $fileExt = ".".substr($r['media'], stripos($r['media'], '.') + 1); ?>
</div>
<script type="text/javascript">
var mode = document.getElementById('mode');
var object = document.getElementsByName('video');
var k;

for (k = 0; k < object.length; k++ ){
				object[k].onclick = function(){
					document.getElementById('vid').src = this.id;		
			mode.style.display = "block";
			var str = this.id;
			var loc = str.lastIndexOf("image/");
			var slice = str.slice(7+loc);
			
			document.getElementById("downgrade").download = '<?php echo $r['title'].$fileExt; ?>';
			document.getElementById("downgrade").href = '../image/<?php echo $r['media']; ?>';
				}
			}

		function those(){
			document.getElementById('downgrade').style.display = "none";
			document.getElementById('vid').src = "";
			var mode = document.getElementById('mode');
			mode.style.display = "none";
		}
		
</script>

</html>