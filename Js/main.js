var mySlideImages = ["slide1.jpg","slide2.jpg","slide3.jpg"];
var i=0;



slideShow();

function slideShow(){
	document.getElementById("slideshow").src="img/"+mySlideImages[i];
	setTimeout(function () {
		if (i< mySlideImages.length - 1) {
			i++
		}
		else{
			i=0;
		}
		slideShow();
	},4000)
}




function volunteer(){
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexLastname=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
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
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexLastname.test(lastname.value)){
 		validLastame.innerHTML=" Lastname Not Valid";
	}
	else{
		validLastame.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
	}
	else{
		validNumber.innerHTML="";
	}
}

function aboutValidation(){
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexLastname=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;
	var name =document.getElementById('about-name');
	var validName =document.getElementById('about-name-valid');
	var lastname =document.getElementById('about-lastname');
	var validLastame =document.getElementById('about-lastname-valid');
	var email =document.getElementById('about-email');
	var validEmail =document.getElementById('about-email-valid');
	var number =document.getElementById('about-number');
	var validNumber =document.getElementById('about-number-valid');
	
	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexLastname.test(lastname.value)){
 		validLastame.innerHTML=" Lastname Not Valid";
	}
	else{
		validLastame.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
	}
	else{
		validNumber.innerHTML="";
	}
}