<!DOCTYPE html>

<?php
	// require_once("../includes/functions.php");
?>

<html>

	<div class="container-fluid">

	<head>

		<title>YudaPlanner</title>

		<!-- Import Stylesheets -->
		<link href="main.css" type="text/css" rel="stylesheet">
		<link href="select2-4.0.3/dist/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

		<!-- Load jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Import select2 -->
		<script src="select2-4.0.3/dist/js/select2.min.js"></script>
		<!-- Import Bootstrap Javascript -->
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
				<div class="col-md-4" id="topMiddle">
					<p> TOP MIDDLE - MY SELECTED CLASSES </p>
				</div>
				<div class="col-md-4" id="topRight">
					<p> TOP RIGHT - CLASS SELECTION </p>
					<div id="select2-classes" class="select2-drop">

						<select id="class-menu" class="class-selection">
						  	<option value="EE16A">EE16A: Designing Information Systems and Devices I</option>
						  	<option value="EE16B">EE16B: Designing Information Systems and Devices II</option>
						  	<option value="CS61A">CS61A: The Structure and Interpretation of Computer Programs</option>
						  	<option value="CS61B">CS61B: Data Structures</option>
						  	<option value="CS61C">CS61C: Machine Structures</option>
						  	<option value="CS70">CS70: Discrete Mathematics and Probability Theory</option>
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