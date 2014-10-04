<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Take-Away Survey Results</title>
		<link rel="stylesheet" type="text/css" href="twSurveyResponse.css">
	</head>

	<body>
		<?php
		 /*
		  * Gets arributes from post method 
		  */
			$title      = $_POST["cmbTitle"];
			$firstName  = $_POST["txtFirstname"];
			$surname    = $_POST["txtSurname"];
			$lastTW     = $_POST["optLastTW"];
			$phoneFirst = isset($_POST["chkPhoneFirst"]);
			$howMany    = $_POST["numHowMany"];
			$usrAge     = $_POST["usrAge"];
			$usrEmail   = $_POST["usrEmail"];

			echo "<h2>Thank-you $title $surname.</h2>";
			echo "<p>Your last take-away was $lastTW. <br>";
			if ($phoneFirst)
			{
			echo "<p>You phoned your order through.</p>";
			}
			else
			{
			echo "<p>You ordered and collected in person.</p>";
			}

			echo "<p>You were ordering for $howMany.</p>";
			echo "<p>You are $usrAge years old</p>";
			echo " <p>Your E-mail address is $usrEmail</p>";
		?>
	</body>
</html>
