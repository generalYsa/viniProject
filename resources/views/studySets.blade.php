<title>vini | Study Sets</title>
<link href="{{ asset('css/studySets.css') }}" rel="stylesheet">

@extends('layouts.app') 
<!-- BODY / RIGHT SIDE PANEL -->
		<!-- STUDY SETS -->
			<div id="body">
				<div class="wrapper">
				  <div class="cards">

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">CMSC 129</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<button onclick="document.getElementById('modal-wrapper')" class="deleteBut"><i class="fa fa-minus-circle" id="delete"></i></button>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">CMSC 125</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">ENG10</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">129 LAB</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">BIO 1</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">CMSC 126</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>
				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">BIO 1</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>

				    <div class=" card [ is-collapsed ] ">
				      <div class="card__inner [ js-expander ]">
				        <div class="subject">CMSC 126MSC 126MSC 126MSC 126MSC 126MSC 126MSC 126</div>
				        <div id="choices">
				        	<i class="fa fa-graduation-cap" id="study"></i>
				        	<i class="fa fa-play-circle" id="play"></i>
				        	<i class="fa fa-edit" id="edit"></i>
				        	<i class="fa fa-minus-circle" id="delete"></i>
				        </div>
				      </div>
				    </div>
  				</div>

				</div>
				<div id="modal-wrapper" class="modal">
					<form class="modal-content animate" action="/action_page.php">
						<div>
							<span onclick="document.getElementById('modal-wrapper')" class="close" title="Close PopUp">&times;</span>
							<p>Are you sure you want to delete this?</p>
						</div>
						<div class="container">
							<li><a href="#">Yes</a></li>
							<li><a href="#">Yes</a></li>
						</div>
					</form>
				</div>
			</div>
		<!-- /BODY / RIGHT SIDE PANEL -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/studySets.js"></script>