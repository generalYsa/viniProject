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
	$.ajaxSetup({
			headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	})
	
	$(".dropdownButton").click(function(event) {
		$(".dropbtn").text(event.target.text);
		$("#activityScore").text(event.target.name);
		
		var activityID = event.target.id;
		var classID = $("#activityName").name;
		console.log(activityID)
		$.ajax({

			type: 'GET',
			url: '/recordForm/getRecords',
			data: {id:activityID},
			dataType: 'HTML',
			success: function (data) {
				$('#recordStudents').empty();
				$('#recordStudents').append(data);
			},
			error: function (data) {
				console.log(data);
			}
		});
		
		$(".LabelAndFieldContainer").removeClass("Hidden").removeClass("Text-Center");
		$(".FieldNameContainer").text("");
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