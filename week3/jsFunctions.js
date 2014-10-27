function validateForm() {
	checkName();
	checkPassword();
}

	function checkName() {
		var objFirstName = document.getElementById("txtFirstname");
		var objSurname = document.getElementById("txtSurname");


		/* Check for First Name */
		/* Check whether a value is added */

		if (objFirstName.value == null || objFirstName.value == "") {
			alert("Please enter a first name.");
			return false;
		}

		/* Check for Surname */
		/* Check whether a value is added */

		if (objSurname.value == null || objSurname.value == "") {
			alert("Please enter a surname.");
			return false;
		}
	}

	 function checkPassword() {
		var objPassword = document.getElementById("txtUsrPassword"); 
		var objConfirmPassword = document.getElementById("txtUsrPasswordConfirm"); 

         // check value entered 
		 if (objPassword.value == null || objPassword.value == "") {
		 	alert('please enter a password');
		 	return false;
		 }
         //check value entered 
		 if (objConfirmPassword.value == null || objConfirmPassword.value == "") {
		 	alert('Please enter a confirmation password');
		 	return false;
		 }

        // check password and confirm passwords match 
		if ((objPassword.value != null && objConfirmPassword.value != null) || 
			(objPassword.value != "" && objConfirmPassword.value != "")) {
			      if (objPassword.value == objConfirmPassword.value ) {
			           	console.log(objConfirmPassword);
			      		checkStrength(objConfirmPassword);
			           	alert('password OK, checking strength');
			      }
				  else {
					alert("Passwords do not match");
				}

		}
		
		}

		/**
		 * checkStrength Uses a regular expersion to check that 
		 * the password contains at least one desimal, lower and upper case caracther
		 * that is at least 8 characters long
		 * @param  objConfirmPasswordIn  parses in the propose password 
		 * @return {boolean} 
		 */
		function checkStrength(objConfirmPasswordIn) {
			var passwordStrengthRegEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

			///^(?=.{8,})(*[a-z])(*[A-Z])([\d{2}])$/g;
				 
			var passwordStrengthTest = passwordStrengthRegEx.test(objConfirmPasswordIn.value);

			console.log(passwordStrengthTest);

			if(passwordStrengthTest==false){
				alert('Please enter a password that contains at least one number, one lower case letter and one upper case letter.');
			}
			else{
				alert('Password accepted');
			}
				 
		 }

        

	
