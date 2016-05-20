


$(document).ready( function() {


  // navbar
  $("body").on("click",function() {
    page_status();
  });


  fireworks();
  page_status();
  change_pg("home");
  change_pg("portfolio");
  change_pg("contact");
  change_pg("about");

  // social media

  redirect ('insta', 'https://www.instagram.com/kqi345/', 'tab');
  redirect ('linked', 'https://www.linkedin.com/in/kevin-qi-78a82a9b', 'tab');
  redirect ('fb', 'https://www.facebook.com/kevin.qi.71', 'tab');
  redirect ('git', 'https://github.com/kevinqi34', 'tab');


 // create analytics
 realtime_Stream();

 $('#about_p').on("click",function(){
   createGraph("data_chart");

 });



});


// portfolio
$(window).on("load resize",function(e){
    resizeContent();
    resizeGraphs();


});
