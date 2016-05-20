
function createGraph (input) {

  if($('#about').is(':visible')) {


    console.log("displayed");

    g = new Dygraph(
        document.getElementById(input),
        "../analytics_data_files/data.csv", // path to CSV file
        {
          ylabel: 'Views',
          xlabel: 'Date',
          xLabelHeight: 15,
          yLabelWidth: 15


        }
      );

  }




}


function realtime_Stream () {


window.setInterval(function(){

// Get data

$.ajax({
    url:"../php/get_realtime_data.php",
    type:"POST",
    dataType:"json",
    success:function(msg){

        $('#activeUsers').html(msg[4]);


    }

});

},7000);








}
