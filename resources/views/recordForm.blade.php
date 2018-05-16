<html>
	<head>
        <meta charset="utf-8"><!-- character encoding -->
		<meta name="_token" content="{!! csrf_token() !!}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost:8000/css/sideBar.css" rel="stylesheet">
        <link href="http://localhost:8000/css/ToDo_Notif.css" rel="stylesheet">
		<link href = "http://localhost:8000/css/recordForm.css" rel = "stylesheet"> </link>
		<meta charset = "utf-8"><!-- character encoding -->
	    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> VINI | Record Grades </title>
		<link href = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu|Bree+Serif" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style id="9368fab6-245f-4dd9-9165-46df9b970f71">.linkifyplus img { max-width: 90%; }</style>
	</head>
	@extends('layouts.app')
		<div id = "body">
			<!-- RECORD FORM IDENTIFIER -->
			<div>
				<div class = "LabelAndFieldContainer" id = "initialDetails">
					<div id = "header">
					
						<div class="dropdown">
							<button class="dropbtn" id = "activityName" name = "{{$classID}}"> Choose an activity </button>
							
							<label id = "activityScore"> 5 </label>
							
							<div id="myDropdown" class="dropdown-content">
								@forelse($activities as $activity)
									<a class = "dropdownButton" name = "{{$activity->score}}" id = "{{ $activity->id }}"> {{ $activity->name }} </a>
								@empty
									<a class = "noAct" id = "none"> No activities yet. </a>
								@endforelse
									
								<!-- <a class = "dropdownButton" id = "2">Link 2</a> -->
								<!-- <a class = "dropdownButton" id = "3">Link 3</a> -->
							</div>
							
						</div> 
						
					</div>
					
					<div class = "RequirementType">
						<label> Filter </label>
						<button id = "r0"> All </button>
						<button id = "r1"> Assignment </button>
						<button id = "r2"> Quiz </button>
						<button id = "r3"> Long Exam </button>
						<button id = "r4"> Final Exam </button>
						<button id = "r5"> Lab Activity </button>
						<button id = "r6"> Problem Set </button>
					</div>
					
				</div>
			</div>
			<!-- RECORD FORM IDENTIFIER -->
			
			<!-- RECORD FORM -->
			<form method = "POST">	
				<div id = "formContainer">
					
					<!-- RECORD FORM FIELD HEADER -->
					<div class = "LabelAndFieldContainer" id = "recordHeader">
						<div class = "HeaderLabelContainer" id = "studentName">
							<label> Name of Student </label>
						</div>
						<div class = "HeaderLabelContainer" id = "grade">
							<label> Score </label>
						</div>
						<div class = "HeaderLabelContainer" id = "files">
							<label> Files </label>
						</div>
					</div>
					<!-- RECORD FORM FIELD HEADER -->
					
					<!-- RECORD FORM BODY --> <!-- Names and Grades of Students --> <!-- PHP could be used to loop. -->
					<div class = "LabelAndFieldContainer Record">
						<div class = "FieldNameContainer">
							<label> Kent Rio </label>
						</div>
						<div class = "FieldValueContainer">
							<input name = "score[]" type = "number" min = "0" max = "1000"> </<input>
						</div>
						<div class = "FieldValueContainer">
							<a href="#"> View Submission </a>
						</div>
					</div>
					
					<div class = "LabelAndFieldContainer Record">
						<div class = "FieldNameContainer">
							<label> Kent Rio </label>
						</div>
						<div class = "FieldValueContainer">
							<input name = "score[]" type = "number" min = "0" max = "1000"> </<input>
						</div>
						<div class = "FieldValueContainer">
							<a href="#"> View Submission </a>
						</div>
					</div>
					
					<div class = "LabelAndFieldContainer Record">
						<div class = "FieldNameContainer">
							<label> Kent Rio </label>
						</div>
						<div class = "FieldValueContainer">
							<input name = "score[]" type = "number" min = "0" max = "1000"> </<input>
						</div>
						<div class = "FieldValueContainer">
							<a> No Files Submitted </a>
						</div>
					</div>
					<!-- RECORD FORM BODY -->
					
					<!-- RECORD FORM BUTTONS / RECORD FORM CONTROL PANEL -->
					<div class = "FormButtonsContainer">
						<input type = "submit" value = "Save Changes"> </input>
						<input type = "reset" value = "Clear Records"> </input>
						<button> Cancel </button>
					</div>
					<!-- RECORD FORM BUTTONS / RECORD FORM CONTROL PANEL -->
				</div>
			</form>
			<!-- RECORD FORM -->
		</div>
    
    <script src="http://localhost:8000/js/main.js"></script>
	<script src="http://localhost:8000/js/recordForm.js"> </script>

</body></html>