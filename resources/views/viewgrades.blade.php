<title>vini | My Grades</title>
<link href="{{ asset('css/viewgrades.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script src="{{asset('js/computeGrades.js')}}" ></script>


@extends('layouts.app') 


<!-- BODY / RIGHT SIDE PANEL -->        
	<div id="body">
		<!-- VIEW GRADES -->
		<!-- <label>{{ $gradeReqs[0]->ActivitiesClass }}</label> -->
		<label>CLASS</label>

		<div id="grades">
			<!-- GRADE REQUIREMENTS -->
			<ul id="gradeTitle">
				@foreach($gradeReqs as $gradeReq)
					<li id="gradeReqName">{{ $gradeReq->name }}
						<span>
							<em class='studPercentage'>0</em> /
							<em class='totalPercentage'>{{ $gradeReq->percentage }}</em>%&nbsp;&nbsp;
							<i id="gradeReq" onclick="toggleGradeReq()" class="fa fa-angle-down fa-lg"></i>
						</span>

						<ul id="gradeReqActs">
							@foreach($gradeReq->GetTheActivity($gradeReq->id) as $userActivity).
									<li id="gradeReqActsDetails">{{$userActivity->name}}
										<span class='totalScore'>{{$userActivity->score}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>/</span>
										<span class='studScore'>{{ $gradeReq->GetActScore($userActivity->id)->score}}</span>
										
									</li>
							@endforeach		
						</ul>
					</li>					
				@endforeach
				 
                <li><em>TOTAL</em><span><em id='grandTotal'>100%</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
			</ul>
			<!-- GRADE REQUIREMENTS -->
		</div>		
		<!-- VIEW GRADES -->		
	</div>
<!-- /BODY / RIGHT SIDE PANEL -->
