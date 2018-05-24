<title>vini | Student List</title>
<link href="{{ asset('css/studentList.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">


@extends('layouts.app') 


<!-- BODY / RIGHT SIDE PANEL -->        
	<div id="body">
		<!-- STUDENT LIST -->
			<div id="students">
				<table>
					<tr>
						<th>Name</th>
						<th>Student Number</th>
						<th>Status</th>
						<th></th>
					</tr>
					@if(count($studentlists)>0)
					@foreach($studentlists as $studentlist)		
					<tr id="student_{{$studentlist->id}}">
						<td>{{ $studentlist->student->name}}</td>
						<td>{{ $studentlist->student->IDnum}}</td>
						<td class="status">{{ $studentlist->status}}</td>
						<td>
							<input type="hidden" class="studentListID" value="{{$studentlist->id}}">
							@if($studentlist->status == "Active")
								<button class="dropModal" onclick="showModal(this)">Drop</button>
							@else
								<button class="dropModal" onclick="showModal(this)">Active</button>
							@endif
						</td>
					</tr>
					@endforeach
					@else()	
					<tr>
						NO STUDENTS YET
					</tr>
					@endif				
				</table>
			</div>
		<!-- STUDENT LIST -->
		<!-- DROP STUDENT MODAL -->
		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close" onclick="drop()">&times;</span>
		    <p>Are you sure you want to change the status of this student?</p>
		    	{{ method_field('PUT') }}
                {{ csrf_field() }}
		    	<button name="confirmYes" type="submit" onclick="drop()">Yes</button>
		    	<button onclick="closeModal()">No</button>
		  </div>
		</div>
        <!-- /DROP STUDENT MODAL -->
	</div>
<!-- /BODY / RIGHT SIDE PANEL -->

<script type="text/javascript" src="js/studentList.js"></script>