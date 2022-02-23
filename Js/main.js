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