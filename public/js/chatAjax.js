$(document).ready(function(){  
    retrieveData();

    $("#send").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        // fillable
        var formData = {
            chatID: $('#chatID').val(),
            senderID: $('#senderID').val(),
            message: $('#message').val(),
        }

        console.log(formData);

        $.ajax({

            type: 'POST',
            url: '/chat',
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var msg = '<div class="message-body"><div class="message-main-sender"><div class="sender">'
                msg += '<p class="message-text">' + data['message'] +'</p>'
                msg += '<span class="message-time pull-right">'+ data['created_at'] + '</span>'
                msg += '</div></div></div>'

               
                $('#conversation').prepend(msg);
            },
            error: function (data) {
                console.log(data);
            }
        });
        $('#message').val("");

        
    });

    function retrieveData(){
        console.log("hey");
        getSentMessage();
        setTimeout(retrieveData, 10000);

    }

    function getSentMessage(){
        console.log("hola");
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // })

        // $.ajax({

        //     type: 'get',
        //     url: '/chat/getSentMessage',
        //     success: function (data) {

        //         console.log(data);
        //         var msg = '<div class="message-body"><div class="message-main-sender"><div class="sender">'
        //         msg += '<p class="message-text">' + data['message'] +'</p>'
        //         msg += '<span class="message-time pull-right">'+ data['created_at'] + '</span>'
        //         msg += '</div></div></div>'

               
        //         $('#conversation').prepend(msg);
        //     },
        //     error: function (data) {
        //         console.log(data);
        //     }
        // });


        $.get('http://localhost:8000/chat/getSentMessage', function(data){
                console.log(data);
        });

    }

});