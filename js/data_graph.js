
function createGraph (input) {

  if($('#about').is(':visible')) {


    console.log("displayed");

    g = new Dygraph(
        document.getElementById(input),
        "../analytics_data_files/data.csv", // path to CSV file
        {
          ylabel: 'Sessions',
          xlabel: 'Date',
          xLabelHeight: 15,
          yLabelWidth: 15


        }
      );

  }




}
