


$(document).ready( function() {
  // navbar
  $("body").on("click",function() {
    page_status();
  });

  
  page_status();
  change_pg("home");
  change_pg("portfolio");
  change_pg("contact");

});
