<title>vini | Play Study Sets</title>
<link href="{{ asset('css/playStudySet.css') }}" rel="stylesheet">

@extends('layouts.app') 
<!-- BODY / RIGHT SIDE PANEL -->	
			<div id="body">
				<div id="subject"><span>CMSC 132</span></div>
				<div class="container">
				  <input id="rad1" type="radio" name="rad" checked>

				  <section>
				    <div id="term"><h1>Question</h1>
				    <div id="question">Define Term A</div></div>
				    
				    <div id="description">
				    	<h1>Answer</h1>
				    	<input type="text" id="answer">
				    	<button id="submit">Submit</button>
				    </div>
				    <label for="rad3"><i class="fa fa-chevron-right"></i></label>
				    <label for="rad2"><i class="fa fa-chevron-left"></i></label>
				  </section>

				  <input id="rad2" type="radio" name="rad">
				  <section>
				    <div id="term"><h1>Question</h1>
				    <div id="question">What is Pak?</div></div>
				    
				    <div id="description">
				    	<h1>Answer</h1>
				    	<input type="text" id="answer">
				    </div>
				    <label for="rad1"><i class="fa fa-chevron-right"></i></label>
				    <label for="rad3"><i class="fa fa-chevron-left"></i></label>
				  </section>
				  <input id="rad3" type="radio" name="rad">
				  <section>
				    <div id="term"><h1>Question</h1>
				    <div id="question">If you were given the chance to change something from the past, what would it be?</div></div>
				    
				    <div id="description">
				    	<h1>Answer</h1>
				    	<input type="text" id="answer">
				    </div>
				    <label for="rad2"><i class="fa fa-chevron-right"></i></label>
				    <label for="rad4"><i class="fa fa-chevron-left"></i></label>
				  </section>
				  <input id="rad4" type="radio" name="rad">
				  <section>
				    <div id="term"><h1>Question</h1>
				    <div id="question">If you have a magic wand, what is the one you would ask for, and why?</div></div>
				    
				    <div id="description">
				    	<h1>Answer</h1>
				    	<input type="text" id="answer">
				    </div>
				    <label for="rad3"><i class="fa fa-chevron-right"></i></label>
				    <label for="rad1"><i class="fa fa-chevron-left"></i></label>
				  </section>
				</div>
			</div>	
		<!-- /BODY / RIGHT SIDE PANEL -->