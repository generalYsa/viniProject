<html>
	<head>
        <meta charset="utf-8"><!-- character encoding -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost:8000/css/sideBar.css" rel="stylesheet">
        <link href="http://localhost:8000/css/ToDo_Notif.css" rel="stylesheet">
		<link href = "http://localhost:8000/css/recordForm.css" rel = "stylesheet"> </link>
		<meta charset = "utf-8"><!-- character encoding -->
	    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> VINI | Requirements </title>
		<link href = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu|Bree+Serif" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style id="9368fab6-245f-4dd9-9165-46df9b970f71">.linkifyplus img { max-width: 90%; }</style>
	</head>
	@extends('layouts.app')
	<div id = "body">
		@forelse($requirements as $req)
			<a href = "/recordForm/{{$classID}}/{{$req->id}}"> {{ $req->name }} </a> </br>
		@empty
		
		@endforelse
	</div>
	<script src="http://localhost:8000/js/main.js"></script>
	</body>
</html>