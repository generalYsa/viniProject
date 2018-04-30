"use strict"

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function switchFilter(mode) {
	alert("You pressed me! " + mode);
	
	document.getElementById("myDropdown").classList.toggle("show");
}

function selectOption(mode) {
	document.getElementById("activityName").textContent = mode;
}

window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++)			
		{
			var openDropdown = dropdowns[i];
			
			if (openDropdown.classList.contains('show')) 
			{
				openDropdown.classList.remove('show');
			}
		}
	}
} 