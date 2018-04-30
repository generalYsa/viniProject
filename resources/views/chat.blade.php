      
<title>vini | Chat</title>
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">

<meta name="_token" content="{!! csrf_token() !!}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/chatAjax.js"></script>


@extends('layouts.app')            

	<!-- BODY / RIGHT SIDE PANEL -->        
		<div id="body">
		  <!-- CHAT _____________________________________________ -->
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
		                            <form action= "?type=<type_here?>" method="GET">   
		                                <input type="text" id="searchText" type="text" name="search" placeholder="Search">    
		                                <button type="submit" name="submit" value="Search" class="searchButton"> <i class="fa fa-search"></i></button>
		                            </form> 
		                            <!-- -  - - - - - - - - - -->                  
		                          </div>             
		                      </div>  
		                   <!-- SEARCH --> 
		                </div> 
		              </div>
		              <!--  HEADING ON THE LEFT  -->

		              <!-- <div class="heading phone">                  
		                  <a href="?type='new'"><i class="fa fa-pencil-square-o" style="font-size:30px"></i></a>
		              </div>  -->


		             
		              

		              <!-- CHATMATES SIDEBAR  -->
		                <div class="sideBar">                             
		                 


			                <!-- CHATMATE -->
				                @forelse($chat as $chatMate)
					                <a href="{{ action('ChatController@show',[$chatMate->id])}}">
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
							                            <span class="sideBar-time pull-left">{{ $chatMate->updated_at->diffForHumans()}}</span>
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
		          <!-- sideBar -->
		          
		          
		         
		         
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
		                
		                <!-- NAME -->
		                  <div class="heading-name">
		                    <p class="heading-name-meta"> Name  </p>
		                  </div>
		                <!-- NAME -->
		                
		                <!-- refresh -->
		                  <div class="pull-right">
		                    <!-- <a href="?chatID=ChatIDhere"><i class="fa fa-undo" aria-hidden="true" style="font-size:25px;margin-top:10px;"></i></a> -->
		                    <span  class="SideBarToggleButton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
		                  </div>
		                <!-- refresh -->
		              </div>
		            <!-- HEADING ON THE RIGHT -->

		            

		            <!-- CONVERSATION -->
		              <div class="message" id="conversation">
		              	
		              	
		              	@forelse($messages as $message)

		              	@if($message->senderID == Auth::id())
			                <!-- MESSAGE (user is sender) -->
			                  <div class="message-body"> 
			                    <div class="message-main-sender">
			                      <div class="sender">
			                        <!-- MESSAGE -->
			                          <p class="message-text">
			                            {{$message->message}}
			                          </p>
			                        <!-- MESSAGE -->
			                        
			                        <!-- TIME -->
			                          <span class="message-time pull-right">
			                            {{$message->created_at->diffForHumans()}}
			                          </span>
			                        <!-- TIME -->
			                      </div>
			                    </div>
			                  </div>
			                <!-- MESSAGE (user is sender) -->   
			            @else
			                <!-- MESSAGE (user is receiver) -->
			                    <div class="message-body">
			                      <div class="message-main-receiver">
			                        <div class="receiver">
			                          <!-- MESSAGE -->
			                            <p class="message-text">
			                              {{$message->message}}
			                            </p>
			                          <!-- MESSAGE -->

			                          <!-- TIME -->
			                            <span class="message-time pull-right">
			                              {{$message->created_at->diffForHumans()}}
			                            </span>
			                          <!-- TIME -->
			                        </div>
			                      </div>
			                    </div>
			                <!-- MESSAGE (user is receiver) -->
			            @endif


			        @empty
			        @endforelse
			        	
			        
		              </div>
		            <!-- CONVERSATION -->

		            <!-- SEND -->
		              <div class="reply">
		              	
		                
		                <form type='POST'>
		                  @csrf
		              
	                  	<!-- chatID -->
	                  	<input type="hidden" id="chatID" value="{{$id}}">
		                  
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
		        </div>
		      </div>
		    <!-- CHAT  -->
		  <!-- __________________________________________________ -->
		</div>
	<!-- /BODY / RIGHT SIDE PANEL -->

        
    
