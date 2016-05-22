
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


function get_data() {

  $.ajax({
      url:"../php/get_realtime_data.php",
      type:"POST",
      dataType:"json",
      success:function(msg){

          $('#activeUsers').html(msg[4]);
          $('#activeUsers').css("font-size","20px");
          // create chart

          var data = google.visualization.arrayToDataTable([
            ['Property', 'Active Users'],
            ['AP Calculator',     parseInt(msg[0])],
            ['Spere',     parseInt(msg[1])],
            ['Flashpilot',  parseInt(msg[2])],
            ['Gamez4school', parseInt(msg[3])]
          ]);

          var options = {
              legend: 'none'
            };


          var chart = new google.visualization.PieChart(document.getElementById('pie_chart_data'));

          chart.draw(data, options);









      }

  });


  $('#activeUsers').css("font-size","18px");






}


function realtime_Stream () {
  google.charts.load('current', {'packages':['corechart']});

  get_data();

  window.setInterval(function(){

  // Get data
  get_data();


  },7000);





}



function refresh() {

  $('#refresh').click(function() {

    $.ajax({
     type: "POST",
     url: "../php/get_analytics_data.php",
     success: function(data) {
       console.log(data);

     }
    });





  });





}
