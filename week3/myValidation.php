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
				</select>

				<label for="txtFirstname">Firstname: </label>
				<input type="text" name="txtFirstname" id="txtFirstname" >

				<label for="txtSurname">Surname: </label>
				<input type="text" name="txtSurname" id="txtSurname" >
				</br></br>

				<label for="txtUsrName">User Name: </label>
				<input type="text" name="txtUsrName" id="txtUsrName">
				</br></br>

				<label for="txtUsrPassword">Password: </label>
				<input type="text" name="txtUsrPassword" id="txtUsrPassword">
					</br></br>

				<label for="txtUsrPasswordConfirm">Confirm Password: </label>
				<input type="text" name="txtUsrPasswordConfirm" id="txtUsrPasswordConfirm">
						</br></br>

				<label for="txtUsrEmail">Please enter a Valid E-mail address</label>
				<input type="text" name="txtUsrEmail" id="txtUsrEmail">
					</br></br>

				<label for="txtUsrAddress">Please enter first line of your address: </label>
				<input type="text"name="txtUsrAddress1" id="txtUsrAddress">
					</br></br>

				<label for="txtUsrPostcode">Please Enter your postcode</label>
				<input type="text" name="txtUsrPostcode" id="txtUsrPostcode">
					</br></br>

				<label for="txtUsrShoeSize">Please tell us your shoe size: </label>
				<input type="number"name="txtUsrShoeSize" id="txtUsrShoeSize">
					</br></br>

				<label for="rdoMale">Male</label>
				<input type="radio" name="rdoGender" id="rdoMale" value="Male">
					</br></br>

				<label for="rdoFemale">Female</label>
				<input type="radio" name="rdoGender" id="rdoFemale" value="Female">
					</br></br>

		
				
				<input type="submit" value="Submit">
			</fieldset><br>
		</form>
	</body>
</html>