<!DOCTYPE html>

<?php
	// require_once("../includes/functions.php");
?>

<html>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<div class="container-fluid">

	<head>

		<title>YudaPlanner</title>
		<link href="select2-4.0.3/dist/css/select2.min.css" rel="stylesheet">

	</head>

	<body>
		<!-- Load jQuery FIRST -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Then import select2 -->
		<script src="select2-4.0.3/dist/js/select2.min.js"></script>

		<div id="topLeft">
			<p> hi </p>
		</div>

		<div id="topRight">
			<p> LEL </p>
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

		<div id="bottomLeft">
			<p> hi </p>
		</div>

		<div id="bottomRight">
			<p> hi </p>
		</div>

	</body>

	</div>

</html>