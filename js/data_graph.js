
function createGraph (input) {

  setTimeout(function () {

    g = new Dygraph(
        document.getElementById(input),
        "../analytics_data_files/data.csv", // path to CSV file
        {


        }
      );

    console.log("hello");  

    }, 5000);



}
