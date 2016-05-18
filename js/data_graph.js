
function createGraph (input) {

  // get data

  $.ajax({
           type: "GET",
           url: "./analytics_data_files/data.csv",
           dataType: "csv",
           success: function (data) {

             console.log(data)



            }
       });



    g = new Dygraph(
        document.getElementById(input),
        data, // path to CSV file
        {


        }
      );





}
