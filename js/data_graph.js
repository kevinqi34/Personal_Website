
function createGraph (input) {


  var chart = AmCharts.makeChart(input, {
       "type": "serial",
       "dataLoader": {
          "url": "../php/get_analytics_data.php",
          "format": "json"
       },
       "categoryField": "city",

       "categoryAxis": {
         "gridAlpha": 0.07,
         "title": "City"
       },
       "valueAxes": [{
         "stackType": "regular",
         "gridAlpha": 0.07,
         "title": "Sessions"
       }],
       "graphs": [{
         "type": "column",
         "title": "Sessions",
         "valueField": "sessions",
         "lineAlpha": 0,
         "fillAlphas": 0.6
       }],
      });




}
