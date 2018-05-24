@forelse($records as $record)
<div class = "LabelAndFieldContainer Record">
	<div class = "FieldNameContainer">
		<label> {{ $record->userClass->name }} </label>
	</div>
	<div class = "FieldValueContainer">
		<input name = "score[]" type = "number" min = "0" max = "1000" value='{{$record->score}}'> </<input>
	</div>
	<div class = "FieldValueContainer">
		<a href="#"> View Submission </a>
	</div>
</div>
@empty
@endforelse 
	