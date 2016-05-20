
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


function realTime() {

  gapi.analytics.ready(function() {


    gapi.analytics.auth.authorize({
      container: 'authorize',
      clientid: '100743134'
    });



    var activeUsers = new gapi.analytics.ext.ActiveUsers({
      container: 'real-time',
      pollingInterval: 5
    });


  }


}
