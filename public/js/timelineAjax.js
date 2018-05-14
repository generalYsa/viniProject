
var newPostTimeout ;
$(document).ready(function(){  

    retrieveData();


    // function when user Posts something
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
                var url = '';
                var formToEmpty;
            // initializing data to insert to DB
                var formData=   {   classID: $('#classID').val(),
                                    author: $('#authorID').val(),
                                }; 

                // initialize data if postType is POST
                    if( type == 'post'){
                        url = '/timeline/savePost'
                        $.extend(formData, {content: $('#normalForm').val(),
                                            // file: $('#fileUp').val(),
                                            }
                                );
                        formToEmpty = $('#normalContent').find('textarea');
                    }
                //------------------------------------

                //initialize data if postType is ACTIVITY
                    else if( type == 'activity'){
                        var date = $('#activityDate').val();
                        date = date == "No Deadline" ? null : date;
                        url = '/timeline/saveActivity';
                        $.extend(formData, {    name: $('#activityName').val(),
                                                description: $('#activityDescription').val(),
                                                deadline: date,
                                                score: $('#score').val(),
                                                gradeReqID: $('#gradeReq').val(),
                                            }
                                );
                        console.log(formData['deadline']);
                        formToEmpty = $('#activityForm').find('input');
                    }
                //--------------------------------------  

                //initialize data if postType is EVENT
                    else if( type == 'event'){
                        url = '/timeline/saveEvent';
                        $.extend(formData, {    name: $('#eventName').val(),
                                                description: $('#description').val(),
                                                date: $('#eventDate').val(),
                                            }
                                );
                        formToEmpty = $('#eventForm').find('input');
                    }
                //------------------------------------   
             
            // ajax function  ---------------------     
                $.ajax({

                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'HTML',
                    success: function (data) {
                        $('#timelineBody').prepend(data);
                        formToEmpty.val(' ');
                    },
                    error: function (data) {

                        alert('PLEASE FILL IN ALL KEMERLIN');
                    }
                }); 
            //-------------------------------------   
       
        });
    // ----------------------------------


    // get latest post -----
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
                        if(data.length != 0){
                            clearTimeout(newPostTimeout);       
                            $('#newContent').css('visibility','visible');


                        }
                                
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
        }
    // ---------------------


    // append latest posts -------------
        $("#newContent").click(function (e){

            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })

            $.ajax({

                type: 'GET',
                url: '/timeline/appendLatestPosts' ,
                data:   { 
                            classID: $('#classID').val(),
                            latestDate: $('.postDate:first').val(),                            
                        },
                dataType: 'HTML',
                success: function (data) {
                    $('#timelineBody').prepend(data);
                    console.log("clickedButton");
                    newPostTimeout = setTimeout(retrieveData, 1000);
                    $('#newContent').css('visibility','hidden');
                            
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    //----------------------------------


    // loop for getting latestPost -----
        function retrieveData(){
            getLatestPost();
            newPostTimeout = setTimeout(retrieveData, 1000) ;
        }
    // ---------------------------------

    //function for displaying selected file when user uploads
        $('input[type="file"]').change(function(){
            $("#filename").text(
            $('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
            console.log($('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
        })
    // ---------------------
});

    