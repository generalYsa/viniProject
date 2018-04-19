$(document).ready(function(){
    $("#eventContent").hide();
    $("#activityContent").hide();

    $("#normalPost").click(function(){
        $("#normalContent").show();
        if($("#eventContent").show() || $("#activityContent").show()){
            $("#eventContent").hide();
            $("#activityContent").hide();
        }
   });
   $("#eventPost").click(function(){
                // $("#eventContent").toggle(1000);
       $("#eventContent").show();
       if($("#normalContent").show() || $("#activityContent").show()){
           $("#normalContent").hide();
           $("#activityContent").hide();
       }
   });
        $("#activityPost").click(function(){
            // $("#activityContent").toggle(1000);
                $("#activityContent").show();
            if($("#eventContent").show() || $("#normalContent").show()){
                $("#eventContent").hide();
                $("#normalContent").hide();
            }
        });
    });