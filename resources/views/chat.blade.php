      
<title>vini | Chat</title>
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">

<meta name="_token" content="{!! csrf_token() !!}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/chatAjax.js"></script>


@extends('layouts.app')            

<!-- BODY / RIGHT SIDE PANEL -->        
	<div id="body">
	    <!-- CHAT  -->
	      	<div class="container_app"> 
		        <div class="row app-one">
			        <!-- LEFT sideBar -->
			          	<div class="side" id="mySidenav">
			              
				            <!--  HEADING ON THE LEFT  -->
				              	<div class="default">
					            	<div class="heading"> 
					                  	<!-- SEARCH -->  
					                      	<div class="searchBox">    
					                          <div class="form-group has-feedback">
					                            
					                            <!-- SEARCH  - - - - - - -->
					                                <input type="text" id="searchText" type="text" name="search" placeholder="Search">    
					                                <button type="submit" id="searchBtn" value="Search" class="searchButton"> <i class="fa fa-search"></i></button>
					                            <!-- -  - - - - - - - - - -->                  
					                          </div>             
					                      </div>  
					                   <!-- SEARCH --> 
					                </div> 
				              	</div>
			              	<!--  HEADING ON THE LEFT  -->		             
			              

			            	<!-- CHATMATES SIDEBAR  -->
				              	<input type="hidden" id="loggedUser" value="{{ Auth::id() }}">
				                <div id="chatSideBar">                             
				                    <!-- CHATMATE -->
						                @forelse($chat as $chatMate)
							                <a onclick="getMessages(this)">
							                	<input type='hidden' value= '{{$chatMate->chatMate}}'>
							                    <div class="ChatSideBar-body">
							                                        
								                  	<!-- PROFILE PICTURE -->
								                        <div class="sideBar-avatar">
								                          <div class="avatar-icon">
								                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
								                          </div>
								                        </div>
							                     	<!-- PROFILE PICTURE -->
								                      
								                    <!-- INFO -->
								                    	<div class="sideBar-info pull-left">                              
									                        <!-- NAME OF CHATMATE -->
									                        	<div class="sideBar-name elipsis ">
									                            	{{ $chatMate->chatMates['name'] }}
									                          	</div>
									                        <!-- NAME OF CHATMATE -->
									                    
									                        <!-- TIME -->
									                        	<span class="sideBar-time pull-left"> {{ $chatMate->created_at->diffForHumans() }}</span>
									                        <!-- TIME -->
								                      	</div>
								                    <!-- INFO -->
							                    </div>
							                </a>   
						                @empty
							            @endforelse
					                <!-- CHATMATE -->
				                </div>
			            	<!-- CHATMATES SIDEBAR  -->
			        	</div>
			        <!-- LEFT sideBar -->
			        
			        <!-- CONVERSATION -->
			        	<div class="conversation">

			        		<!-- HEADING ON THE RIGHT -->
							  	<div class="heading">
								    <!-- PROFILE PICTURE -->
								      	<div class="heading-avatar">
								        	<div class="heading-avatar-icon">
								          		<img src="https://bootdey.com/img/Content/avatar/avatar6.png">
								        	</div>
								      	</div>
								    <!-- PROFILE PICTURE -->
								    
								    @if($messages->count() > 0)
									    <!-- NAME -->
									      	<div class="heading-name">
										      	@if($messages[0]->senderID == Auth::id())
										        	<p class="heading-name-meta"> {{ $messages[0]->receiver['name']}} </p>
										        @else 
										        	<p class="heading-name-meta"> {{ $messages[0]->sender['name'] }} </p>
										        @endif
										    </div>
									    <!-- NAME -->
									@endif
								    
								    <!-- refresh -->
								    	<div class="pull-right">
								        <!-- <a href="?chatID=ChatIDhere"><i class="fa fa-undo" aria-hidden="true" style="font-size:25px;margin-top:10px;"></i></a> -->
								        	<span  class="SideBarToggleButton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
								      	</div>
								    <!-- refresh -->
							  	</div>
							<!-- HEADING ON THE RIGHT -->
			    			<div class="message" id="conversation">
			    				@include('chat.messages') 
			    			</div>

			    			<!-- SEND -->
							  	<div class="reply">
								    <form type='POST'>
								  		<!-- chatID -->
								  			<input type="hidden" id="receiverID" value="{{$id}}">
								      
								      	<!-- senderID -->
								      		<input type="hidden" id="senderID" value= {{ Auth::id() }}> <!-- change value to Auth::user()->id -->
								      
								        <!-- TEXTAREA FOR MESSAGE -->
								        	<div class="reply-main">
								            	<textarea class="form-control" id="message" ></textarea>
								            </div>
								      
								      	<!-- SEND BUTTON -->
							        		<button class="reply-send" id="send"><i class="fa fa-send fa-2x" aria-hidden="true"></i></button>
								   	</form>
							  	</div>
							<!-- SEND -->  
						</div>
			    	<!-- CONVERSATION -->
		    	</div> 
		    </div>
	    <!-- CHAT  -->
	</div>
<!-- /BODY / RIGHT SIDE PANEL -->

        
    
