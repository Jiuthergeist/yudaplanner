<!DOCTYPE html>

<?php
	// require_once("../includes/functions.php");
?>

<html>

	<div class="container-fluid">

	<head>

		<title>YudaPlanner</title>
<!-- 		<link href="main.css" type="text/css" rel="stylesheet"> -->

		<!-- Import Stylesheets -->
		<link href="select2-4.0.3/dist/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

		<!-- Load jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Import select2 -->
		<script src="select2-4.0.3/dist/js/select2.min.js"></script>
		<!-- Import Javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>

	<body>


		<div class="container">
			<!-- NAVBAR -->
			<div class="navbar navbar-default" role="navigation">

				<div class="navbar-header">
					<!-- Button to reveal menu on small tablet/smartphone devices
					Data-toggle means, when clicked: do this (collapse). Collapse what? Data-target: .navbar-collapse -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<span class="navbar-brand">YudaPlanner</span>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">DUMMY</a></li>
						<li><a href="#">DUMMY</a></li>
						<li><a href="#">DUMMY</a></li>
					</ul>
				</div>

			</div>


			<!-- TOP ROW -->
			<div class="row">
				<div class="col-md-4" id="topLeft">
					<p> TOP LEFT - GENERAL STATS </p>
				</div>
				<div class="col-md-8" id="topRight">
					<p> TOP RIGHT - CLASS SELECTION </p>
					<div id="select2-classes" class="select2-drop">

						<select class="class-selection">
						  	<option value="EE16A">EE16A</option>
						  	<option value="EE16B">EE16B</option>
						  	<option value="CS61A">CS61A</option>
						  	<option value="CS61B">CS61B</option>
						  	<option value="CS61C">CS61C</option>
						</select>
						<script>
							$("select").select2();
						</script>
					</div>
				</div>
			</div>

			<!-- BOTTOM ROW -->
			<div class="row">
				<div class="col-md-4" id="bottomLeft">
					<p> BOTTOM LEFT - YUDA </p>
				</div>

				<div class="col-md-8" id="bottomRight">
					<p> BOTTOM RIGHT - CLASS-SPECIFIC STATS </p>
				</div>
			</div>
		</div>

	</body>

	</div>

</html>