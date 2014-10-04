<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Take-Away Survey</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<form name="frmTWSurvey" method="post" action="twSurveyResponse.php">
			<fieldset>
				<legend>About You</legend>
				<label class="lblWidth" for="cmbTitle">Title: </label>
				<select name="cmbTitle" id="cmbTitle">
	                <option>Mr</option>
					<option>Mrs</option>
					<option>Ms</option>
					<option>Dr</option>
				</select><br><br>

				<label class="lblWidth" for="txtFirstname">Firstname: </label>
				<input type="text" name="txtFirstname" id="txtFirstname"><br><br>
				<label class="lblWidth" for="txtSurname">Surname: </label>
				<input type="text" name="txtSurname" id="txtSurname"><br><br>
			</fieldset><br>

			<fieldset>
				<legend>Your Last Take-Away</legend>
				<fieldset>
					<legend>What was your last take-away?</legend>
					<label for="optIndian"> Indian: </label>
					<input type="radio" name="optLastTW" id="optIndian" value="Indian" checked="checked">
					<label for="optChinese"> Chinese: </label>
					<input type="radio" name="optLastTW" id="optChinese" value="Chinese">
					<label for="optKebab"> Kebab: </label>
					<input type="radio" name="optLastTW" id="optKebab" value="Kebab">
					<label for="optPizza"> Pizza: </label>
					<input type="radio" name="optLastTW" id="optPizza" value="Pizza">
					<label for="optFish"> Fish 'n' Chips: </label>
					<input type="radio" name="optLastTW" id="optFish" value="Fish 'n' Chips">  
				</fieldset><br>
			</fieldset>

			<fieldset>
				<legend> How far is the restaurant from your home></legend>
				<label class="lblWidth" for ="optDistanceTW"> 0-2 miles </label>
				<input type="radio" name="optDistanceTW" id="optDistance1" value="0-2 Miles">
				<label class="lblWidth" for ="optDistanceTW"> 3-5 miles </label>
				<input type="radio" name="optDistanceTW" id="optDistance2" value="3-5 Miles">
				<label class="lblWidth" for ="optDistanceTW"> 6+ miles </label>
				<input type="radio" name="optDistanceTW" id="optDistance3" value="6+ Miles">
				<br/>
				<br/>

				<label class="lblWidth" for="chkPhoneFirst">Did you phone your order through first?</label>
				<input type="checkbox" name="chkPhoneFirst" value="PhoneFirst" >
				<br><br>

				<label class="lblWidth" for="chkOrderDelivered">Was your order delivered?</label>
				<input type="checkbox" name="chkOrderDelivered" value="Delivered" >
				<br><br>

				<label class="lblWidth" for="numHowMany">How many people was your take-away for?</label>
				<input type="text" name="numHowMany" maxlength="2" id="numHowMany"><br>

			</fieldset>

			<fieldset>
				<legend>About you</legend>

				<label class="lblWidth" for="usrAge">How old are you?</label>
				<input type="number" name="usrAge" id="usrAge"><br>

				<label class="lblWidth" for="usrEmail">Please enter a valid E-Mail address</label>
				<input type="email" name="usrEmail" id="usrEmail"><br>



			</fieldset>
			<input type="submit" value="Submit"> <input type="reset" value="Reset" />
		</form>
	</body>
</html>
