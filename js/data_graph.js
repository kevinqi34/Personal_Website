
function createGraph (input) {

  if($("#about").css("display") == "block") {

    g = new Dygraph(
        document.getElementById(input),
        "../analytics_data_files/data.csv", // path to CSV file
        {


        }
      );

  }




}
