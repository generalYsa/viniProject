$(document).ready(function(){  
    retrieveData();



    $("#postBut").click(function (e) {

        e.preventDefault(); 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        console.log( $("#fileUp").val());

        // initializing values for ajax
            var type = $('#type').val();
            var url = '/timeline/savePost'

        // initializing data to insert to DB
            var formData=   {   classID: $('#classID').val(),
                                author: $('#authorID').val(),
                            }; 

            if( type == 'post'){
                $.extend(formData, {content: $('#normalForm').val(),
                                    // file: $('#fileUp').val(),
                                    }
                        );
                url = '/timeline/savePost'
            }else if( type == 'activity'){

                var date = $('#activityDate').val();
                date = date == "No Deadline" ? null : date;

                $.extend(formData, {    name: $('#activityName').val(),
                                        description: $('#activityDescription').val(),
                                        deadline: date,
                                        score: $('#score').val(),
                                        gradeReqID: $('#gradeReq').val(),
                                    }
                        );
                
                url = '/timeline/saveActivity'

            }else if( type == 'event'){

                $.extend(formData, {    name: $('#eventName').val(),
                                        description: $('#description').val(),
                                        date: $('#eventDate').val(),
                                    }
                        );
                
                url = '/timeline/saveEvent'

            }
            
            console.log(formData);
        


        // ajax
            

            $.ajax({

                type: 'POST',
                url: url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                        console.log(data);
            //         var msg = '<div class="message-body"><div class="message-main-sender"><div class="sender">'
            //         msg += '<p class="message-text">' + data['message'] +'</p>'
            //         msg += '<span class="message-time pull-right">'+ data['created_at'] + '</span>'
            //         msg += '</div></div></div>'

                   
            //         $('#conversation').prepend(msg);
                },
                error: function (data) {
                    alert('PLEASE FILL IN ALL KEMERLIN');
                }
            });
        // $('#message').val("");        
    });


    // get latest post
        function getLatestPost(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            $.ajax({

                type: 'GET',
                url: '/timeline/getLatestPost' ,
                data:   { 
                            classID: $('#classID').val(),
                            latestDate: $('.postDate:first').val(),
                        },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                            
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    // -----

    //function for displaying selected file
        $('input[type="file"]').change(function(){
            $("#filename").text(
            $('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
            console.log($('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
        })

    function retrieveData(){

        getLatestPost();
        setTimeout(retrieveData, 20000);
    }
});