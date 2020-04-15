<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<style type="text/css">
		#progress-bar {
			background-color: #13A699;
			width:0%;
			height:20px;
			-webkit-transition: width .3s;
			-moz-transition: width .3s;
			transition: width .3s;
		}
		#progress-div {
			border:#ccc 1px solid;
			margin:30px 0px;
			border-radius:4px;
			text-align:center;
		}
		</style>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Upload Image</h3>
		<hr style="border-top:1px dotted #13A699;"/>
		<form id="upload_form" action="upload.php" method="post">
			<center>
				<div class="form-inline">
					<input name="upload" id="upload" type="file" class="form-control"/>
					<button "btnSubmit" class="btn btn-primary" class="form-control">Upload</button>
				</div>
			</center>
			<div id="progress-div">
				<div id="progress-bar"></div>
			</div>
			 <div id="targetLayer" style="display:none;"></div>
		</form>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/jquery.form.js"></script>	
<script src="js/script.js"></script>
</body>
</html>