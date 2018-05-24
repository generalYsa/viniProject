<title>vini | To Do</title>
<link href="{{ asset('css/toDo.css') }}" rel="stylesheet">

@extends('layouts.app')
	<div id="body">
		<h1 id="header"><span>TO DO</span></h1>
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn">All Classes</button>
			  <div id="myDropdown" class="dropdown-content">
			    <a href="#">CMSC 129</a>
			    <a href="#">CMSC 124</a>
			    <a href="#">ENG 10</a>
			    <a href="#">BIO 1</a>
			    <a href="#">AWRA 123</a> 
			    <a href="#">ART 100</a>
			  </div>
		</div>
		<div id="wrapper">
			<div id="task">
				<li>
					<a href="#">CMSC 129 
						<p>Gamification : Interview/Observation Results</p>
					</a>
					<div id="date">
						<p>Due</p>
						<p>Apr 7</p>
					</div>
				</li>
				<li>
					<a href="#">CMSC 124 
						<p>Level Control Structures Problem Set 4</p>
					</a>
					<div id="date">
						<p>Due</p>
						<p>Jan 1</p>
					</div>
				</li>
				<li>
					<a href="#">AWRA 123 
						<p>Che che bureche</p>
					</a>
					<div id="date">
						<p>Due</p>
						<p>Feb 14</p>
					</div>
				</li>
				<li>
					<a href="#">ART 100 
						<p>Painting Ideas</p>
					</a>
					<div id="date">
						<p>Due</p>
						<p>May 11</p>
					</div>
				</li>
			</div>
		</div>
		
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/toDo.js"></script>