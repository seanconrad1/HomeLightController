<!--
____________________________________________________
		Home Automation Main page by Sean Conrad	
____________________________________________________
-->

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Main</title>
	<script type="text/javascript" src="JSforButton.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>


<body onload= "startTime(); updateClock();">
	<h1 id="date"></h1>
	<h2 id="clock"></h2>

	<div>
		<p>Lights
			<a href="remote_control.php">
				<input class="button" type="button" value="Go">
			</a>
		</p>
		<p>Sprinklers
			<a href="">
			<input class="button" type="button" value="Go">
			</a>
		</p>

		<p> AC
			<a href="">
			<input class="button" type="button" value="Go">
			</a>
		</p>

			<form action="main.php" method="post">Garage
				<input type="submit" name="foo" value="15"class="button"/>
			</form>
		
	</div>
	<div id="footer"></div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<?php
		realpath('G:/Programs/Files/J.A.R.V.I.S'); 					/* Realpath = directory*/
		$lightnum = $_POST["foo"]; 									/* Variable lightnum is assigned with foo's value */
		$myFile = "G:/Programs/Files/J.A.R.V.I.S/lightstate.txt"; 	/* Variable myfile is assigned to the text doc url*/
		$fh = fopen($myFile, 'w') or die("can't open file"); 		/* Variable fh is assigned to opening my file and writing to it*/
		fwrite($fh, $lightnum); 									/* Opens the text file and writes the lightnum value to it*/
		fclose($fh);												/* Closes text file*/
		error_reporting(0);					
	?>
</body>