
var numOfSearch = 0;
var chatSideBar = null;
// ajax setup function
    function ajaxSetup(){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        })
    }


$(document).ready(function(){  
    retrieveData();


    // when user clicks Send
        $("#send").click(function (e) {
            ajaxSetup()

            e.preventDefault(); 

            // fillable
            var formData = {
                receiverID: $('#receiverID').val(),
                senderID: $('#senderID').val(),
                message: $('#message').val(),
            }


            $.ajax({

                type: 'POST',
                url: '/chat',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    // console.log(data);
                    var msg = '<div class="message-body"><div class="message-main-sender"><div class="sender">'
                    msg += '<p class="message-text">' + data['message'] +'</p>'
                    msg += '<span class="message-time pull-right">'+ data['created_at'] + '</span>'
                    msg += '</div></div></div>'

                   
                    $('#conversation').prepend(msg);
                },
                error: function (data) {
                    // console.log(data);
                }
            });
            $('#message').val("");        
        });
    // -------
   

    // get latest message from sender
        function getSentMessage(){
            ajaxSetup()
            
            $.ajax({

                type: 'GET',
                url: '/getSentMessage' ,
                data:   { 
                            chatMate: $('#receiverID').val(),
                            latestDate: $("#latestTime").val(),
                        },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data != ''){
                        var msg = '<div class="message-body"><div class="message-main-receiver"><div class="receiver">'
                        msg += '<p class="message-text">' + data['message'] +'</p>'
                        msg += '<span class="message-time pull-right">'+ data['created_atDiff'] + '</span>'
                        msg += '</div></div></div>';
                        $('#conversation').prepend(msg);
                        console.log(data['created_at']['date']);

                        $("#latestTime").val(data['created_at']['date']);


                    }        
                },
                error: function (data) {
                }
            });
        }
    // -----


    // when user searches for a chatmate
        $("#searchText").on('input', function (e) {
            
            var searched = $("#searchText").val()
           
            if(numOfSearch==0){
                chatSideBar = $("#chatSideBar").detach();
            }

            if(searched.length==0){
                $("#mySidenav").append(chatSideBar);
            }
            
            ajaxSetup()
            $.ajax({

                    type: 'GET',
                    url: '/getSearchChatmate',
                    data: { search: searched },
                    dataType: 'json',
                    success: function (data) {

                        // appending detials -----------
                            var toAppend = '<div id="chatSideBar">'; 
                            var i;
                            for(i=0; i<data.length; i++){
                                toAppend += '<a onclick="getMessages(this)">';
                                toAppend += '<input type="hidden" value="' + data[i]['chatMate'] +'">'
                                toAppend += '<div class="ChatSideBar-body"><div class="sideBar-avatar"><div class="avatar-icon"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"></div></div><div class="sideBar-info pull-left"><div class="sideBar-name elipsis ">';
                                toAppend += data[i]['name'];
                                toAppend += '</div></div></div></a>';  
                            }
                            toAppend += "</div>"
                        // appending ---------------------

                        $("#chatSideBar").detach();
                        $("#mySidenav").append(toAppend);
                        console.log(data);


                    },
                    error: function (data) {
                        console.log("error");
                        
                    }
            });
            
            numOfSearch +=1;
        });
    // ----



    function retrieveData(){
        getSentMessage();
        setTimeout(retrieveData, 2000);
    }


});


// get the messages between current user, and clicked chatmate  
function getMessages(chatmate){
        // set up of chatmates sidebar -----
            if(chatSideBar != null){
                $("#chatSideBar").detach();
                $("#mySidenav").append(chatSideBar);
                chatSideBar = null;
            }
        // -------
        
        ajaxSetup();
        var chatMateID = $(chatmate).children('input:first').val()
        $.ajax({

            type: 'GET',
            url: '/getMessages',
            data: { chatMate:  chatMateID},
            dataType: 'HTML',
            success: function (data) {      
                // appending ---------------------
                $('#conversation').empty();
                $('#conversation').append(data);
                $('#receiverID').val(chatMateID);
                $('.heading-name-meta').text($(chatmate).find('.sideBar-name').text().trim());


            },
            error: function (data) {
                console.log("error");
                
            }
        });
        
}