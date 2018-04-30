$(document).ready(function(){
    $("#eventContent").hide();
    $("#activityContent").hide();

    // function when NORMAL button is clicked
      $("#normalPost").click(function(){
          $("#normalContent").show();
          if($("#eventContent").show() || $("#activityContent").show()){
              $("#eventContent").hide();
              $("#activityContent").hide();
          }
          $('#type').val("post");
     });

    // function when EVENT button is clicked
     $("#eventPost").click(function(){
                  // $("#eventContent").toggle(1000);
         $("#eventContent").show();
         if($("#normalContent").show() || $("#activityContent").show()){
             $("#normalContent").hide();
             $("#activityContent").hide();
         }
         $('#type').val("event");
     });

     // function when ACTIVITY button is clicked
      $("#activityPost").click(function(){
          // $("#activityContent").toggle(1000);
          $("#activityContent").show();
          if($("#eventContent").show() || $("#normalContent").show()){
              $("#eventContent").hide();
              $("#normalContent").hide();
          }
          $('#type').val("activity");
      });
        
});