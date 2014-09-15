<!DOCTYPE html>
<html>

￼￼￼￼<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"> <title>Take-Away Survey Form</title>
	</head>
	<body>

		<form name="frmGetUser" action="result.php" method="get"> 
			<fieldset>
				<legend>About You:</legend>
				
				<label for="cmbTitle">Title: </label> 
				<select name="cmbTitle" id="cmbTitle">
					<option>Mr</option> 
					<option>Mrs</option> 
					<option>Ms</option>
					 <option>Dr</option>
				</select><br><br>

				<label for="txtFirstname">Firstname: </label> <input type="text" name="txtFirstname" id="txtFirstname"><br><br>
				<label for="txtSurname">Surname: </label>     <input type="text" name="txtSurname" id="txtSurname"><br><br>
				<label for="txtFavDish">Please enter the name of your faviorite take away dish</label> <input type="text" name="txtFavDish" id="txtFavDish"><br/><br/>
				
				<input type="submit" value="submit"> 

			


			</fieldset>
		</form>

	</body>
 </html>