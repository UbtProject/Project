var volunteerBtn = document.getElementById('volunteerBtn');
volunteerBtn.addEventListener("click", function (event) {
	
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;
	var name =document.getElementById('volunteer-name');
	var validName =document.getElementById('name-valid');
	var lastname =document.getElementById('volunteer-lastname');
	var validLastame =document.getElementById('lastname-valid');
	var email =document.getElementById('volunteer-email');
	var validEmail =document.getElementById('email-valid');
	var number =document.getElementById('volunteer-number');
	var validNumber =document.getElementById('number-valid');

	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
 		event.preventDefault();
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexName.test(lastname.value)){
 		validLastame.innerHTML=" Lastname Not Valid";
 		event.preventDefault();
	}
	else{
		validLastame.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
 		event.preventDefault();
	}
	else{
		validNumber.innerHTML="";
	}
});


var volunteerButton = document.getElementById("volunteerButton");
volunteerButton.addEventListener("click", function (event) {
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;

	var name =document.getElementById('about-name');
	var validName =document.getElementById('about-name-valid');
	var lastname =document.getElementById('about-lastname');
	var validLastname =document.getElementById('about-lastname-valid');
	var email =document.getElementById('about-email');
	var validEmail =document.getElementById('about-email-valid');
	var number =document.getElementById('about-number');
	var validNumber =document.getElementById('about-number-valid');
	
	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
 		event.preventDefault();
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexName.test(lastname.value)){
 		validLastname.innerHTML=" Lastname Not Valid";
 		event.preventDefault();
	}
	else{
		validLastname.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
 		event.preventDefault();
	}
	else{
		validNumber.innerHTML="";
	}
});

var loginBtn = document.getElementById('loginBtn');
loginBtn.addEventListener("click", function (event) {
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexPass=/[A-Z]\w{7,15}/;

	var email =document.getElementById('login-email');
	var validEmail =document.getElementById('login-email-valid');
	var password =document.getElementById('login-password');
	var validPassword =document.getElementById('login-password-valid');
	
	
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();

	}
	else{
		validEmail.innerHTML="";
	}
	if(password.value==""||!regexPass.test(password.value)){
 		validPassword.innerHTML=" Password Not Valid";
 		event.preventDefault();

	}
	else{
		validPassword.innerHTML="";
	}
	
});



var registerBtn = document.getElementById('registerBtn');
registerBtn.addEventListener("click", function (event) {
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;
	var regexPass=/[A-Z]\w{7,15}/;

	var name =document.getElementById('register-name');
	var validName =document.getElementById('register-name-valid');

	var lastname =document.getElementById('register-lastname');
	var validLastname =document.getElementById('register-lastname-valid');

	var email =document.getElementById('register-email');
	var validEmail =document.getElementById('register-email-valid');

	var number =document.getElementById('register-number');
	var validNumber =document.getElementById('register-number-valid');

	var password =document.getElementById('register-password');
	var validPassword =document.getElementById('register-password-valid');

	var cPassword =document.getElementById('register-password2');
	var validCPassword =document.getElementById('register-password2-valid');
	

	
	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
 		event.preventDefault();
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexName.test(lastname.value)){
 		validLastname.innerHTML=" Lastname Not Valid";
 		event.preventDefault();
	}
	else{
		validLastname.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
 		event.preventDefault();
	}
	else{
		validNumber.innerHTML="";
	}
	if(password.value==""||!regexPass.test(password.value)){
 		validPassword.innerHTML=" Password must start with a capital letter and have 8 characters";
 		event.preventDefault();
	}
	else{
		validPassword.innerHTML="";
	}
	if(cPassword.value!=password.value){
 		validCPassword.innerHTML=" Passwords Must Match";
 		event.preventDefault();
	}
	else{
		validCPassword.innerHTML="";
	}
	
});