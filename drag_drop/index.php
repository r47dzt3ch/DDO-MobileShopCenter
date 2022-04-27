<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<style>
			#drop-zone{
				margin-top:20px;
				height:200px;
				background-color:white;
				border:3px dashed grey;
			}
			.text{
				margin-top:70px;
				color:grey;
				font-size:25px;
				font-weight:bold;
			}
			#drop-zone img{
				max-width:200px;
			}
		</style>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Drag And Drop Image Upload Using jQuery</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div id="col-md-12" style="text-align:center;">
			<input type="file">
			<div id="drop-zone">
				<h3 class="text">Drag and Drop Images Here</h3>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>