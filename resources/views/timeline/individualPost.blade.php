<div class="postContainer">
	<div class="postHeader">
		<img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">
		<p class="name">{{ $post->authorClass->name }}</p>
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
					<div class="postTitle">{{ $post->name }}</div>
				
				<!-- Description -->
					<div class="postDescription">{{ $post->description }}</div>
				

				<div style="margin-top: 5px;">
					<!-- FILE -->
					<a class="postFile" href="files/rants.pdf" ><i class="fa fa fa-download"></i> Filename.pdf</a>

					<!-- DEADLINE / DATE -->
					@if($post->type == 'event' || $post->type == 'activity' )
						<?php $toPrint = $post->type == 'event' ? 'Date' : 'Deadline'; ?>
						@if($post->date != '')
							<div class="postDeadline"> {{ $toPrint }} : {{date_create($post->date)->format('F d, Y') }}</div>
						@else
							<div class="postDeadline">	No Deadline </div>
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