<title>vini | Student List</title>
<link href="{{ asset('css/studentList.css') }}" rel="stylesheet">

@extends('layouts.app') 


<!-- BODY / RIGHT SIDE PANEL -->        
	<div id="body">
		<!-- STUDENT LIST -->
			<div id="students">
				<table>
					<tr>
						<th>Name</th>
						<th>Student Number</th>
						<th></th>
					</tr>
					@if(count($studentlists)>0)
					@foreach($studentlists as $studentlist)		
					<tr>
						<td>{{ $studentlist->name}}</td>
						<td>{{ $studentlist->IDnum}}</td>
						<td><button>Drop&nbsp;X</button></td>
					</tr>
					@endforeach
					@else()	
					<tr>
						NO STUDENTS YET
					</tr>
					@endif				
					<!-- <tr>
						<td>Alyssa Lavilla</td>
						<td>2015-xxxxx</td>	
						<td><button>Drop&nbsp;X</button></td>				
					</tr>
					<tr>
						<td>Vaughn Ventura</td>
						<td>2015-xxxxx</td>	
						<td><button>Drop&nbsp;X</button></td>			
					</tr>
					<tr>
						<td>Kent Rio</td>	
						<td>2015-xxxxx</td>	
						<td><button>Drop&nbsp;X</button></td>			
					</tr>				 -->
				</table>
			</div>
		<!-- STUDENT LIST -->
	</div>
<!-- /BODY / RIGHT SIDE PANEL -->

<script type="text/javascript" src="studentListAjax.js"></script>