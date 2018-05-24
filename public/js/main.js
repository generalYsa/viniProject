function toggleSidebar(){
	document.getElementById("sidebar").classList.toggle('active');
}

function toggleNotif(){
	document.getElementById("notifBar").classList.toggle('active');
	

	// if toDoBar is visible, it will be hidden
		var toDo = document.getElementById("toDoBar");
		if(window.getComputedStyle(toDo, null).getPropertyValue("visibility") === "visible"){
			toDo.classList.toggle('active')
		}
}

function toggleToDo(){
	document.getElementById("toDoBar").classList.toggle('active');
	
	// if notifBar is visible, it will be hidden
		var notifBar = document.getElementById("notifBar");
		if(window.getComputedStyle(notifBar, null).getPropertyValue("visibility") == "visible"){
			notifBar.classList.toggle('active')
		}
}

function toggleClass(){
	document.getElementById("classDropDown").classList.toggle('active');
}

function toggleSubject(){
	

	var work = document.getElementById("workID");
	if(window.getComputedStyle(work, null).getPropertyValue("display") === "block"){
			toggleWork();
	}

	toggleClass();
	document.getElementById("subjectID").classList.toggle('active');
}


function toggleWork(){
	var subject = document.getElementById("subjectID");
	if(window.getComputedStyle(subject, null).getPropertyValue("display") === "block"){
			toggleSubject();
	}

	toggleClass();
	document.getElementById("workID").classList.toggle('active');
}

$("#viewGrades").hide();
function viewGrades(linkClicked){
	if($("#viewGrades").hide()){
		$("#viewGrades").show();
	}
}

// function toggleGradeReq(linkClicked){
// 	if($("#gradeReqActs").hide()){
// 		$("#viewGrades").show();
// 	}
// }

// FOR TEACHER


function profEditModal(linkClicked){
	var parent = $(linkClicked).parent();
	var classID =  parent.children('.classID').val();
	var className =  parent.children('.className_').val();
	$("#classEdit").val(className);
	$("#classEditID").val(classID);
	$("#editClassForm").attr("action", "/home/" + classID);
}

function deleteClass(linkClicked){
	var parent = $(linkClicked).parent();
	var classID =  parent.children('.classID').val();
	$("#delClassID").val(classID);
	$("#delClass").attr("action", "/home/" + classID);
}

// FOR TEACHER

// FOR STUDENT

function dropModal(linkClicked){
	var parent = $(linkClicked).parent();
	var classID =  parent.children('.classID').val();
	$("#dropClassID").val(classID);
	$("#dropClass").attr("action", "/home/" + classID);
}








// FOR STUDENT

// function toggleSubject(){
// 	document.getElementById("classDropDown").classList.toggle('active');
// 	// document.getElementById("subjectID").classList.toggle('active');
// }





// function addClass(){
// 	document.getElementById('id01').style.display='block';
// }

// form modal
// function closeModal(){
// 	document.getElementById('id01').style.display='none';
// }

// function toggleStud(){
// 	document.getElementById("stud").classList.toggle('active');
// }

// $(document).ready(function(){
// 	$("#chenes").hide();

// 	$("#plus_icon").click(function(){
// 		$("#chenes").show();
// 		if($("#workID").show()){
// 			$("#workID").hide();
// 		}
// 	});

// 	$("#ellipsis_icon").click(function(){
// 		$("#chenes").show();
// 		if($("subjectID").show()){
// 			$("#subjectID").hide();
// 		}
// 	});

// 	$("#quiz").hide();
// 	$("#exam").hide();

// 	$("#pointer1").click(function(){
// 		$("#quiz").show();
// 		if($("#exam").show()){
// 			$("#exam").hide();
// 		}
// 	});



	// $(".form").hide();

	// $("#stud").click(function(){
	// 	$(".form").show();
	// 	}
	// });
// });















// $(document).ready(function(){
// 	$("#quiz").hide();
// 	$("#exam").hide();

// 	if($("#quiz").show()){
// 		$("#pointer1").click(function(){
// 			$("#quiz").hide();
// 			if($("#exam").show()){
// 				$("#exam").hide();
// 			}
// 		});
// 	}if($("#quiz").hide()){
// 		$("#pointer1").click(function(){
// 			$("#quiz").show();
// 			if($("#exam").show()){
// 				$("#exam").hide();
// 			}
// 		});
// 	}

// 	$("#pointer2").click(function(){
// 		$("#exam").show();
// 		if($("#quiz").show()){
// 			$("#quiz").hide();
// 		}
// 	});
// });

// $(document).ready(function(){
// 	$(".student-login").hide();

// 	$("#stud").click(function(){
// 		$(".student-login").show();
// 		}
// 	});
// });

