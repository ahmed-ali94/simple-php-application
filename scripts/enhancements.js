/*  
	Title:  JS Enhancements.
	Author: Ahmed Ali
	Student Id: 101383139
	Tutor: Bo Li 
 */

function switchThemeLight() { // switches to light theme by changing the body and footer background colors. 
	
		document.querySelector("body").style.backgroundColor = "#A1C3D1";
		document.querySelector("footer").style.backgroundColor = "#C1C8E4";
		document.querySelector("body").style.color = "#24252A";
	}
	
		
	 
function switchThemeDark() { // // switches to light theme by changing the body and footer background colors.
	
		document.querySelector("body").style.backgroundColor = "#24252A";
		document.querySelector("footer").style.backgroundColor = "#949494";
	}

 

function countdown() {
  var currentTime = document.getElementById('timer').innerHTML;
  var time_array = currentTime.split(/[:]+/);
  var minute = time_array[0];
  var second = addZero((time_array[1] - 1));
  if(second==59){
	  minute= minute-1;
	}

  	if(minute < 0) { // if munute is less than 0 --> alert user and redirect to homepage.
    	alert('Times Up!');
    	window.location.href="index.html";
    }
  
  document.getElementById('timer').innerHTML =
    minute + ":" + second;
setTimeout(countdown, 1000);
    
}

function addZero(s) {   // puts zero in front of the numbers
  if (s < 10 && s >= 0) {
	  s = "0" + s;
	}
  if (s < 0) {
	  s = "59";
	}
  return s;
}

function begin() {
	if (document.getElementById("applyPage")!=null) { // Checks to see if we are on the apply page first. 
document.getElementById('timer').innerHTML =
  05 + ":" + 00;
 countdown();
}

document.getElementById('theme_switch').addEventListener('click',switchThemeLight);
document.getElementById('theme_switch_default').addEventListener('click',switchThemeDark);  
		
}
window.addEventListener('load', begin);

