
function createGraph (input) {

  if($('#about').is(':visible')) {


    console.log("displayed");

    g = new Dygraph(
        document.getElementById(input),
        "../analytics_data_files/data.csv", // path to CSV file
        {
          ylabel: 'Sessions',
          xlabel: 'Past 60 Days',
          axisLabelFontSize: '15',
          axisLabelWidth: '70'


        }
      );

  }




}
