<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<script src="jsFunctions.js" type="text/javascript"></script>
		<title>User Details</title>
	</head>

	<body>
		<form name="frmUserDetails" method="get" onsubmit="return validateForm();">
			<fieldset>
				<legend>About You</legend>
				<label for="cmbTitle">Title: </label> <select name="cmbTitle" id="cmbTitle">
					<option>Mr</option>
					<option>Mrs</option>
					<option>Ms</option>
					<option>Dr</option>
				</select><br><br>

				<label for="txtFirstname">Firstname: </label>
				<input type="text" name="txtFirstname" id="txtFirstname"><br><br>

				<label for="txtSurname">Surname: </label>
				<input type="text" name="txtSurname" id="txtSurname"><br><br>
				
				<input type="submit" value="Submit">
			</fieldset><br>
		</form>
	</body>
</html>
