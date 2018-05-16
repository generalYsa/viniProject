

$(document).ready(function(){  
    $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    })

    retrieveData();

    // gets the latest ToDo. If ToDo has been viewed, continously get ToDo
    // if the retrieved ToDo has not been viewed yet, the toDoCircle will appear. retrieving data will stop
    function getLastToDo(){
        $.ajax({

            type: 'GET',
            url: '/toDo/getLastUserActivity' ,
            data:   {},
            dataType: 'json',
            success: function (data) {
                if(data['viewed'] == 0){
                    $('#toDoCircle').css('visibility','visible');
                    clearTimeout(newToDo);
                }
                        
            },
            error: function (data) {
                console.log(data);
            }
        });
    }




    $("#toDoBtn").click(function (e) {

        // -- show/hide of toDO and Notif
            document.getElementById("toDoBar").classList.toggle('active');
        
            var notifBar = document.getElementById("notifBar");
            if(window.getComputedStyle(notifBar, null).getPropertyValue("visibility") == "visible"){ // if notifBar is visible, it will be hidden
                notifBar.classList.toggle('active')
            }
        //-----

        $.ajax({url: "/toDo/setView", success: function(result){
                    $("#toDoCircle").css('visibility','hidden');
                    newToDo = setTimeout(retrieveData, 1000);
        }});
        
    });

    function retrieveData(){
        getLastToDo();
        newToDo = setTimeout(retrieveData, 1000) ;
    }


});

