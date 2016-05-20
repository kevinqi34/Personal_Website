
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

    google.charts.load('current', {'packages':['corechart']});

// Get data

$.ajax({
    url:"../php/get_realtime_data.php",
    type:"POST",
    dataType:"json",
    success:function(msg){

        $('#activeUsers').html(msg[4]);
        // create chart

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);


        var chart = new google.visualization.PieChart(document.getElementById('pie_chart_data'));

        chart.draw(data);









    }

});

},7000);








}
