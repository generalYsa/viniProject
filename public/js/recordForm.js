"use strict"

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

$(document).ready(function() {
	$(".dropdownButton").click(function(event) {
		$(".dropbtn").text(event.target.text);
	});
	
	$("#activityName").click(function() {
		$("#myDropdown").addClass("show");
	});
	
	$(".RequirementType > button").click(function() {
		var contentPanelId = $(this).attr("id");
		$(".RequirementType > button").removeClass("Selected");
		$("#" + contentPanelId).addClass("Selected");
	});
	
	$("#r0").addClass("Selected");
});