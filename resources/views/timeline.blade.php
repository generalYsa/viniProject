<title>vini | Timeline </title>
<link href="{{ asset('css/timeline.css') }}" rel="stylesheet">



@extends('layouts.app') 

<div id="body">
	<div id="timeline">
		<div id="subject"><span>CMSC 129</span></div>
		
		<!-- CREATE POST -->
			<div class="postContainer">

				<!-- HEADER -->
					<div class="postHeader">

						<!-- PICTURE -->
							<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
						
						<!-- NAME -->
							<p class="name">{{ Auth::user()->name }}</p>
						
						<!-- CHOICES BUTTON -->
						@if (Auth::user()->userType=='t')
							<div id="buttonChoices">
								<button id="normalPost">Normal</button>
								<button id="activityPost">Activity</button>
								<button id="eventPost" >Event</button>
							</div>
						@endif
					</div>
				<!-- HEADER -->

				<!-- FORMS -->
					<div style="background: #ecf4f0;">
						<!--POST -->
							<form>
								<div id="normalContent">
										<textarea id="normalForm" placeholder="Write something..." required></textarea>
								</div>
							</form>
						<!-- POST -->

						<!-- EVENT -->
							<div id="eventContent">
								<form>
									<div id="eventForm">
										Name:<input id="eventName" type="text" required><br>
										Description:<input id="description" type="text" required><br>
										Date:<input  type="date" id="eventDate" required>
									</div>
								</form>
							</div>
						<!-- EVENT -->

						<!-- ACTIVITY -->
							<div id="activityContent">
								<form>
									<div id="activityForm">
										Name:<input id="activityName" type="text" name="" required><br>
										Description:<input id="activityDescription" type="text" required><br>
										Score:<input id="score" type="number" name="" min="1" required><br>
										Type: <select id="gradeReq">
									    	<option value="1">Assignment</option>
									    	<option value="2">Quiz</option>
									    	<option value="3">Long Exam</option>
									  	</select>
									  	Deadline:<input id="activityDate" placeholder="No Deadline" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" ><br>
									</div>
								</form>
							</div>
						<!-- ACTIVITY -->
					</div>
				<!-- FORMS -->


				<!-- FOOTER -->
					<div class="postFooter">
						<!-- <div class="fileUpload"> -->
							<form>
								<input id= 'classID' type="hidden" value="1">
								<input id= 'authorID' type="hidden" value= {{ Auth::id() }}>
								<input id="type" type="hidden" value="post"> 
								
								
								<label  id="upload" class="postBtns">Upload</label>
								<label id="filename"></label>
								
								<button id="postBut" class="postBtns">Post</button>
							</form>
						<!-- </div> -->
					</div>
				<!-- FOOTER -->
			
			</div>
		<!-- CREATE POST -->

		<div id="timelineBody">
			<!-- POSTS -->

				
				@forelse($timelineFeed as $post)
					<div class="postContainer">
						<div class="postHeader">
							<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
							<p class="name">{{ $post->authorTable->name }}</p>
							<input type='hidden' class="postDate" value="{{ $post->updated_at }}">
							<p id="date">{{ $post->updated_at->format('M d, Y') }}</p>
						</div>

						<div class="postBody">
							
							<!-- <div id="fileContent">
								<a href="files/rants.pdf" download="RANTS">
									<i class="fa fa-file fa-4x"></i>
								</a>
							</div> -->

							<!-- POST CONTENT -->
								<div class="postContent">
									<br>

									<!-- Title/Post -->
										<div class="activityName">{{ $post->name }}</div>
									
									<!-- Description -->
										<div class="activityDescription">{{ $post->description }}</div>
									

									<div style="margin-top: 5px;">
										<!-- FILE -->
										<a class="activityFile" href="files/rants.pdf" ><i class="fa fa fa-download"></i> Filename.pdf</a>

										<!-- DEADLINE / DATE -->
										@if($post->type == 'event' || $post->type == 'activity' )
											<?php $toPrint = $post->type == 'event' ? 'Date' : 'Deadline'; ?>
											@if($post->date != '')
												<div class="activityDeadline"> {{ $toPrint }} : {{date_create($post->updated_at)->format('F d, Y') }}</div>
											@else
												<div class="activityDeadline">	No Deadline </div>
											@endif
										@endif
									</div>
								</div>
							
						</div>
						<!-- SUBMIT BUTTON -->
							@if($post->type == 'activity')
								<label for="submit" class="submitBtn">Submit</label>
								<input type="file" id="submit" value="Submit">
							@endif
					</div>
				@empty
				@endforelse
			<!-- POSTS -->
		</div>
		
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/timeline.js"></script>
<meta name="_token" content="{!! csrf_token() !!}" />
<script type="text/javascript" src="js/timelineAjax.js"></script>
