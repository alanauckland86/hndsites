function validateForm() {

checkName();
checkPassword();
	
}

	function checkName() {
		var objFirstName = document.getElementById("txtFirstname");
		var objSurname = document.getElementById("txtSurname");


		/* Check for First Name */
		/* Check whether a value is added */

		if (objFirstName.value == null || objFirstName.value == ""){
			alert("Please enter a first name.");
			return false;
		}

		/* Check for Surname */
		/* Check whether a value is added */

		if (objSurname.value == null || objSurname.value == ""){
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
		 if (objConfirmPassword.value == null || objConfirmPassword.value == ""){
		 	alert('Please enter a confirmation password');
		 	return false;
		 }

            // check password and confirm passwords match 
			if ((objPassword.value != null && objConfirmPassword.value != null) || 
				(objPassword.value != "" && objConfirmPassword.value != "")) {
				      if (objPassword.value == objConfirmPassword.value ) {
				      		checkStrength(objPassword,objConfirmPassword);
				           	alert('password OK, checking strength');
				      }

					else{
						alert("please enter a passsword");
					}

			}
		
		}

		function checkStrength(objPasswordIn,objConfirmPasswordIn){
			if (objPasswordIn.value == objConfirmPasswordIn.value ) {
				 var pStrength = objConfirmPasswordIn;

				 var atpos=pStrength.indexOf()
					alert("password strength has been checked");
			  }

         return false;
		}

	
