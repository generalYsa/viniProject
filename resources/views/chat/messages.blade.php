<!-- CONVERSATION -->

	  	
	  	@if($messages->count() > 0)
	  		<input type="hidden" id="latestTime" value="{{ $messages[0]->created_at }}">
	  		
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
	        
	    @endif

<!-- CONVERSATION -->

