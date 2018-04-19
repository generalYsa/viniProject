<title>vini | Timeline </title>
<link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

@extends('layouts.app') 

<div id="body">
	<div id="timeline">
		<div id="subject"><span>CMSC 129</span></div>
		<div id="postStudent">
			<div id="topRP">
				<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
				<p id="name">Alyssa Lavilla</p>

				<div id="buttonChoices">
					<button id="normalPost">Normal</button>
					<button id="activityPost">Activity</button>
					<button id="eventPost" >Event</button>
				</div>
			</div>
			<div id="normalContent">
				<textarea id="normalForm" placeholder="Write something..."></textarea>
			</div>
			<div id="eventContent">
				<form>
					<div id="eventForm">
						Name:<input id="userName" type="text" name=""><br>
						Description:<input id="description" type="text" name=""><br>
						Date:<input id="eventDate" type="date" name="">
					</div>
				</form>
			</div>
			<div id="activityContent">
				<form>
					<div id="activityForm">
						Description:<input id="description" type="text" name=""><br>
						Deadline:<input id="activityDate" type="date" name="">
					</div>
				</form>
				
			</div>

			<div class="bottomRP">
				<!-- <div class="fileUpload"> -->
					<button id="postBut">Post</button>
					<label for="fileUp" id="upload">Upload</label>
					<input id="fileUp" type="file">
				<!-- </div> -->
			</div>
		</div>

		<div id="post">
			<div id="topRP">
				<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
				<p id="name">Alyssa Lavilla</p>
				<p id="date">Nov. 01, 1997</p>
			</div>
			<div id="rpContent">
				<p id="message">Hello World!</p>
			</div>
		</div>

		<div id="postFile">
			<div id="topRP">
				<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
				<p id="name">Alyssa Lavilla</p>
				<p id="date">Nov. 01, 1997</p>
			</div>

			<div id="fileContent">
				<a href="files/rants.pdf" download="RANTS">
					<!-- <img id="file" src="up.png"> -->
					<i class="fa fa-file fa-4x"></i>
				</a>
			</div>
			<div id="pfContent">
				<p id="pfmessage">Download RANTS TUTORIAL</p>
			</div>
		</div>

		<div id="postSubmit">
			<div id="topRP">
				<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
				<p id="name">Alyssa Lavilla</p>
				<p id="date">Dec. 20, 2012</p>
			</div>

			<div id="fileContent">
				<a href="files/rants.pdf" download="RANTS 5">
					<i class="fa fa-file fa-4x"></i>
				</a>
			</div>
			<div id="psContent">
				<p id="psmessage">Activity 5 - Implement RANTS 2</p>
				<p id="deadline">Deadline: Oct. 04 2012</p>
				<label for="submit">Submit</label>
				<input type="file" id="submit" value="Submit">
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/timeline.js"></script>