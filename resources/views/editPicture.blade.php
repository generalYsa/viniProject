<title>vini | Edit Picture</title>
<link href="{{ asset('css/editPicture.css') }}" rel="stylesheet">

@extends('layouts.app')
<!-- BODY / RIGHT SIDE PANEL -->        
	<div id="body">
		<!-- EDIT PROFILE PICTURE -->
			<div class="changePhoto">
				<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
				<form action="#">
			  		<input type="file" name="pic" accept="image/*"><br>
			  		<input type="submit">
				</form>					
			</div>
		<!-- /EDIT PROFILE PICTURE -->
	</div>
<!-- /BODY / RIGHT SIDE PANEL -->