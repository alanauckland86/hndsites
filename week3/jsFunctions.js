function validateForm() {
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