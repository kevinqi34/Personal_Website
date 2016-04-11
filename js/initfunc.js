

function page_status() {
  var a = ($("#home").css("display") == "block") + "::home";
  var b = ($("#portfolio").css("display") == "block") + "::portfolio";
  var c = ($("#contact").css("display") == "block") + "::contact";
  var status = [a,b,c];

  for (var i = 0; i < status.length; i++) {
    var stat = status[i];
    stat = stat.split("::");
      if (stat[0] == "true") {
        stat = stat[1];
        $("#" + stat + "_p").css({"border-bottom":"3px solid #707070","font-size":"22px"});

      }

  }



}

function change_pg(page) {

  var pages = ["home", "portfolio", "contact"];
    $("#" + page + "_p").click(function(){

      for (var i = 0; i < pages.length; i++) {
        if (pages[i] != page) {
          $("#" + pages[i]).css("display","none");
          $("#" + pages[i] + "_p").css({"border-bottom":"none","font-size":"20px"});


        }

      }

      $("#" + page).fadeIn();


    });


}
