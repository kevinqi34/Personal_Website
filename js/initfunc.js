

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


function fireworks() {

  if ($('#home').css("display") == "block") {
    setInterval(function(){
      var num = Math.floor((Math.random() * 5) + 5)
       fire(num);

     }, 3000);
 }







}


function fire(number) {
  var w = window.innerWidth - 100;
	var h = window.innerHeight - 100;

  for (var i = 0; i < number; i++) {
    $("#home").append("<div class='fire' id='fire_" + i + "'></div>");
    var left = Math.floor((Math.random() * w) + 1);
    var top = Math.floor((Math.random() * h) + 1);
    $("#fire_" + i).css({ "top": top,"left": left });

  }





    for (var i = 0; i < number; i++) {
      var piece = Math.pow(Math.floor((Math.random() * 4) + 2),2);
      var timing = Math.floor((Math.random() * 5) + 1) * 500;

      $("#fire_" + i).hide( "explode", {pieces: piece }, timing).remove();

    }






}
