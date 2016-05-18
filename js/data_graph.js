
function createGraph (input) {

  var vis = d3.select("#data_chart"),
      WIDTH = 700,
      HEIGHT = 500,
      MARGINS = {
        top: 20,
        right: 20,
        bottom: 20,
        left: 50
      },



  xScale = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([2000,2010]),
  yScale = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([134,215]),


  xAxis = d3.svg.axis()
    .scale(xScale),

  yAxis = d3.svg.axis()
    .scale(yScale);

    vis.append("svg:g")
    .attr("transform", "translate(0," + (HEIGHT - MARGINS.bottom) + ")")
    .call(xAxis);


}
