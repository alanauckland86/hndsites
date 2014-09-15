<?php 

//  changes ini file to display erros
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
?>

<!DOCTYPE html> 
<html>
	<head>
		 <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		 <title>Take-Away Survey Results</title>
	</head>

￼￼￼ <body> 
		<?php 

			$firstName =$_GET["txtFirstname"];
			$surname   =$_GET["txtSurname"];
			$favDish   =$_GET["txtFavDish"];
			$usrTitle  =$_GET["cmbTitle"];

			echo "<h1> </h1>";
			echo "Welcome {$usrTitle} " . $firstName . " " . "{$surname}<br/>"; 
			echo "Your faviorite dish is {$favDish}"; 
		?>

		<h1> </h1>
	</body>
 </html>
