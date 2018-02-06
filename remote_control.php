<!--
____________________________________________________
		Light Control page by Sean Conrad			
____________________________________________________
-->

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Remote control</title>
	<script type="text/javascript" src="JSforButton.js"></script>
	<link rel="stylesheet" type="text/css" href="button.css">
</head>

<body>
	<a href="main.html"><img src="homebutton.gif"/></a>

	<!-- Each submit button contains a value. When pressed, 
		the php script is started and the value is sent to the script through post. -->
		<form action="remote_control.php" method="post">
			<p3 id="bathroom" class="titles">Bathroom</p3>
			<input type="submit" name="foo" value="1" class="button1">
			<input type="submit" name="foo" value="0" class="button2"/>
			<p3 id="bedroom" class="titles">Bedroom</p3>
			<input type="submit" name="foo" value="2" class="button3"/>
			<input type="submit" name="foo" value="3" class="button4"/>
			<p3 id"livingroom" class="titles">Living Room</p3>
			<input type="submit" name="foo" value="4"class="button5"/>
			<input type="submit" name="foo" value="5"class="button6"/>
		</form>

	<!-- Script takes value that was posted and updates text file with that value -->
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
</html>



