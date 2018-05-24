// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementsByClassName("dropModal");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
var statusToUpdate;
var studentListID;
var button;

function showModal(e) {

	button = e;
	statusToUpdate = $(e).parent().parent().find('.status')
	studentListID = $(e).siblings('.studentListID').val();
    modal.style.display = "block";
 
}

function drop(){

	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	$.ajax({

        type: 'POST',
        url: '/studentList/drop',
        data: {	id : studentListID,
        		status: $(button).text()},
        success: function (data) {
            console.log(data);
            	$(button).text(statusToUpdate.text())
            	$(statusToUpdate).text(data['status']);
				modal.style.display = "none";
        },
        error: function (data) {
            console.log('error');
        }
    });		
    
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}