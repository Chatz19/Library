<html>
<head>
<style type="text/css">

.moda{ background-color: transparent; height: 96%; position: relative; z-index: 4; max-width: auto; margin:0% auto; margin-top: 2vh; overflow: hidden; text-align: center; vertical-align: middle; display: inline-block; -webkit-animation-name: example; -webkit-animation-duration:1s;}
		@-webkit-keyframes example{ from{transform:scale(0);   opacity: 1;} to{transform:scale(1); opacity: 1; }}
#moda{ display: none;}
.sasl{background-color: darkred; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); position: fixed; z-index: 2; top: 0; left: 0;}
#img{ max-width: 100%; max-height: 100%; min-width: 150px; min-height: auto;}
.closi{user-select:none;cursor: pointer; font-weight: bolder; color: white; background-color: red; height: 25px; width: 25px; font-size: 20px; text-align: center; margin-top: 50px; font-family: arial;z-index: 1;float: right; position: absolute; top: -50; right: 0; }
.tag{border: 2px red solid; height: auto; width: auto;}
.cancle{width: 100%; height: 100%; position: absolute; z-index: -1;}
.dot{clear: both; float: left; color: white;}
.dot span{float: left; background-color: white; border: 1px solid black; padding: 3px; margin: 5px 2px; margin-top: 10px; border-radius: 100px;}
.download{ background-color: white; font-family: none; padding: 2px; font-size: 18px; 
	box-shadow: 4px 4px 7px rgb(0,0,0,0.5);}
.dotmen{position: absolute; left: 5px; top: 0; float: left; height: auto; width: auto; user-select:none;}
#down{color: black; display: none; margin-left: 10px; clear: both;}
.moda::-webkit-scrollbar{width: 0px;}
		.moda::-webkit-scrollbar-track{background-color: #ccc;}
		.moda::-webkit-scrollbar-thumb{background-color: rgb(0,0,0,0.5); border-radius: 100px;}
		.moda::-webkit-scrollbar-thumb:hover{background-color: red;}
		.closara{width: 100%; height: 100%;}
</style>
</head>
<div class = "sasl" id="moda" >
	<div class = "cancle" onclick = "thos()"></div>
	

<div class = "moda" align = "center" >
	<div class = "dotmen">
	<div class = "dot" onclick = "document.getElementById('down').style.display = 'block';"><span></span><span></span><span></span></div>
	<a href = "" download = "" id = "down" onclick = "document.getElementById('down').style.display = 'none';"><div class = "download">Download</div></a>
	</div>
	<div onclick = "thos()" class = "closi">x</div>
	
<img id = "img" onclick = "document.getElementById('down').style.display = 'none';"/>
<div class = "closara" onclick = "thos()"></div>
</div>
</div>
<script type="text/javascript">
var moda = document.getElementById('moda');
var images = document.getElementsByTagName('object');
var width =document.getElementById('img');

			var i;
			for (i = 0; i < images.length; i++ ){
				images[i].onclick = function(){
					
			moda.style.display = "block";
			document.getElementById('img').src = this.data;
			var str = this.data;
			var loc = str.lastIndexOf("upload/");
			var slice = str.slice(7+loc);
			document.getElementById("down").download = slice;
			document.getElementById("down").href = this.data;
			

				}
			}
		function thos(){
			var moda = document.getElementById('moda');
			moda.style.display = "none";
			document.getElementById('down').style.display = "none";
			

		}
		//-webkit-animation-name: examplevv; -webkit-animation-duration:1s;}
		//@-webkit-keyframes examplevv{ from{transform:scale(0);   opacity: 1;} to{transform:scale(1); opacity: 1; }
</script>

</html>