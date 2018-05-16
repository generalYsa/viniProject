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
 function ajaxSetup(){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        })
    }
$(document).ready(function() {
	$(".dropdownButton").click(function(event) {
		$(".dropbtn").text(event.target.text);
		$("#activityScore").text(event.target.name);
		
		
		var activityID = event.target.id;
		var classID = $("#activityName").name;
		console.log("I changed! " + activityID);
		ajaxSetup();
		$.ajax({

			type: 'POST',
			url: '/recordForm/activity',
			data: {id:activityID, classID:classID},
			dataType: 'json',
			success: function (data) {
				console.log(data);
				
			},
			error: function (data) {
				console.log(data);
			}
		});

		
	});
	
	$("#activityName").click(function() {
		$("#myDropdown").addClass("show");
	});
	
	$(".RequirementType > button").click(function() {
		var contentPanelId = $(this).attr("id");
		$(".RequirementType > button").removeClass("Selected");
		$("#" + contentPanelId).addClass("Selected");
	});
	
	$()
	
	$("#r0").addClass("Selected");
});