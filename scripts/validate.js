/*  
	Title: Validation for apllication page.
	Author: Ahmed Ali
	Student Id: 101383139
	Tutor: Bo Li 
 */

function checkAge(result) { // checks if the age is between 15 to 80. 
	var dobStr= document.getElementById('dob').value;
	var dmy = dobStr.split('/');
	var now= new Date();
	var dob= dmy[2];
	var age= now.getFullYear() - dob;

	if ( age < 15  || age > 80) {
		document.getElementById('dob_error').innerHTML = 'Must be between 15 to 80 years old';
		result = false;
	}
return result;
}


function checkDate() { // checks if the entered date conforms to dd/mm/yyyy regex.

var dateExp = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
var dob = document.getElementById('dob').value;
var result = true;

 if (dateExp.test(dob)) {
 	result = true;
 }
else {
	result= false;
	document.getElementById('dob_error').innerHTML = 'Enter valid date - dd/mm/yyyy'; // added a <span> in the html to display error at the relevant sections on the page, styled with css. 
}
return result;
}

function zipCheck(result) { // checks if both State and Postcodes match via case statement with postcode regex. 
var state = document.getElementById('state').options[document.getElementById('state').selectedIndex].text;
var postcode = document.getElementById('pcode').value;
var pattern;

switch (state) {
	case 'Please Select':
		return false;
	case 'VIC': 
		pattern = new RegExp(/(3|8)\d+/);
		break;
	case 'NSW':
		pattern = new RegExp(/(1|2)\d+/);
		break;
	case 'QLD':
		pattern = new RegExp(/(4|9)\d+/);
		break;
	case 'NT':
		pattern = new RegExp(/0\d+/);
		break;
	case 'WA':
		pattern= new RegExp(/6\d+/);
		break;
	case 'SA':
		pattern = new RegExp(/5\d+/);
		break;
	case 'TAS':
		pattern= new RegExp(/7\d+/);
		break;
	case 'ACT':
		pattern = new RegExp(/0\d+/);
		break;
}

if(!postcode.match(pattern)) {
	document.getElementById('postcode_error').innerHTML = 'State and Postcode dont match!';
	result = false;
	}

	return result;
}

 function otherSkill(result) {
 	var other = document.getElementById('otherskill').checked;

 	if (other && document.getElementById("comment").value == '') {
 		document.getElementById('comment_error').innerHTML = 'Other Skill has been selected, please insert your skills in the textbox!';
 		result = false;
 	}
 	return result;
 }

 function saveDetail() { // saves all values via sessionStorage to be later retrieved. 

 	if(typeof(Storage)!=="undefined") {

 		 sessionStorage.fname = document.getElementById('fname').value;
 		 sessionStorage.lname = document.getElementById('lname').value;
 		 sessionStorage.dob = document.getElementById('dob').value;
 		 sessionStorage.street = document.getElementById('street').value;
 		 sessionStorage.suburb = document.getElementById('suburb').value;
 		 sessionStorage.state = document.getElementById('state').value;
 		 sessionStorage.pcode = document.getElementById('pcode').value;
 		 sessionStorage.mail = document.getElementById('mail').value;
 		 sessionStorage.ph = document.getElementById('ph').value;
 		 sessionStorage.comment = document.getElementById('comment').value;
 	}
 }


 function retrieveDetails() { // checks if the input values are empty, if empty then it fills up the input with the saved sessionStorage values.
 	if(typeof(Storage)!=="undefined"){
 		if(sessionStorage.fname !== null) {
 		document.getElementById('fname').value=sessionStorage.fname;
 		}
 		if(sessionStorage.lname !== null) {
 		document.getElementById('lname').value=sessionStorage.lname;
 		}
 		if(sessionStorage.dob !== null) {
 		document.getElementById('dob').value = sessionStorage.dob;
 		}
 		if(sessionStorage.street !== null) {
 		document.getElementById('street').value = sessionStorage.street;
 		}
 		if(sessionStorage.suburb !== null) {
 		document.getElementById('suburb').value = sessionStorage.suburb;
 		}
 		if(sessionStorage.state !== null) {
 		document.getElementById('state').value = sessionStorage.state;
 		}
 		if(sessionStorage.pcode !== null) {
 		document.getElementById('pcode').value = sessionStorage.pcode;
 		}
 		if(sessionStorage.mail !== null) {
 		document.getElementById('mail').value = sessionStorage.mail;
 		}
 		if(sessionStorage.ph !== null) {
 		document.getElementById('ph').value = sessionStorage.ph;
 		}
 		if(sessionStorage.comment !== null) {
 		document.getElementById('comment').value = sessionStorage.comment;
 		}	
 	}
 }

function validate(result) { // A fucnction that calls all other functions paasing the result value. 
	result= checkDate(result);
	result= checkAge(result);
	result = zipCheck(result);
	result = otherSkill(result);
	saveDetail();
 	return result;
}


function saveJobId(jobId) { // saves the job id from vacanies page. 
	if(typeof(Storage)!=="undefined"){
		localStorage.setItem("referenceid", jobId);
	}
}

function getJobID() { // Gets the job reference id and saves it to local storage. 
	if(typeof(Storage)!=="undefined"){
		if (localStorage.getItem("referenceid") !== null) {
			var refID= document.getElementById("referenceid");
			refID.value = localStorage.getItem("referenceid");
		}	
	}
}

function init() {

	var enableValidation = false;
	var regForm = document.getElementById('regForm');

if (document.getElementById("applyPage")!=null) {  // check to see if we are on apply page.
		getJobID();
		retrieveDetails();

}

 if (enableValidation == true) {
	regForm.onsubmit = validate;
	
}

if (document.getElementById("jobPage")!=null) { // check to see if we are on the vacanies page.

		var applybutton=document.getElementsByClassName("apply_button");  // as soon as the apply button is clicked the refernce id is saved to local storage. 
		for (var i=0; i<applybutton.length; i++)
			applybutton[i].onclick = function () { saveJobId(this.id); }

}
}
window.onload = init;
 