<title>vini | Edit Class</title>
<link href="{{ asset('css/editClass.css') }}" rel="stylesheet">

@extends('layouts.app')

<!-- BODY / RIGHT SIDE PANEL -->
	<div id="body">
		<!-- ADD CLASS MODAL -->
			<div class="modal" id="unmodal">
                <div class="modal_content">
                    <a href="#" class="closeModal">&times;</a>
                    <h2 class="modalHeading2">Edit Class</h2>
                    <form action="#">
                        <input placeholder="Edit Class Name" type="text" value="Class Name" name="className"><br><br>
                        <button class="drop" type="submit">Drop</button>
                        <button class="cancel" type="reset">Cancel</button>
                        <button class="save" type="submit">Save</button>
                    </form>               
                </div>
            </div>
 		<!-- ADD CLASS MODAL -->
	</div>
<!-- BODY / RIGHT SIDE PANEL -->