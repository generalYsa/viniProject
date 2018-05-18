$( document ).ready(function() {
    // console.log( "ready!" );

	$('li', $('#gradeTitle')).each(function () {
		var title = $(this);

		var percentage =  title.find('.totalPercentage').text()/100;
	    $('ul', $(this)).each(function () {
	    		
	    		var studScore = 0;
	    		var totalScore = 0;
	    		$('li', $(this)).each(function () {
	    				studScore += parseInt($(this).find('.studScore').text());
	    				totalScore += parseInt($(this).find('.totalScore').text());
	    				// console.log(studScore +' ' +totalScore);
	    		});

	    		var total = ((studScore/totalScore)*100)*percentage;
	    		if(total){
	    			title.find('.studPercentage').text(total);
	    		}
	    		
	    });

	    //console.log($(this))
	});
	    	var grandTotal = 0;
	$('.studPercentage').each(function(){

		    grandTotal += parseFloat($(this).text());
	});

	$('#grandTotal').text(grandTotal);
});