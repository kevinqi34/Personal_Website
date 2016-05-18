
function createGraph (input) {

  // get data

  $.ajax({
           type: "GET",
           url: "./analytics_data_files/data.csv",
           dataType: "csv",
           success: function (data) { console.log(data) }
       });




  all.done(function () {
    // something to call when all files have been successfully loaded
  });

    g = new Dygraph(
        document.getElementById(input),
        data, // path to CSV file
        {


        }
      );





}
