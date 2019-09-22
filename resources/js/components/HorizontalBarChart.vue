<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Vertical Bar Chart</div>
                    <svg class="vbarchart"></svg>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Horizontal Bar Chart</div>
                    <svg class="hbarchart" height="500"></svg>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {

         data(){
              return {
                    data: [],
              };
         },
         methods: {
            verticalBarChart: function( d ){
                 var data = d.map(function(d){
                      return d.value;
                 });

                  var barWidth = $('.col-md-4').width(),
                      barHeight = 25;

                  var x = d3.scaleLinear()
                      .domain([0, d3.max(data)])
                      .range([0, barWidth -10 ]);

                  var chart = d3.select(".vbarchart")
                      .attr("width", barWidth)
                      .attr("height", barHeight * data.length);

                  var bar = chart.selectAll("g")
                      .data(data)
                    .enter().append("g")
                      .attr("transform", function(d, i) {
                        return "translate(0," + i * barHeight +")";
                      });

                  bar.append("rect")
                      .attr("width", x)
                      .attr("height", barHeight - 5);

                  bar.append("text")
                      .attr("x", function(d) { return x(d) - 3; })
                      .attr("y", barHeight / 2)
                      .attr("dy", ".35em")
                      .text(function(d) { return d; });
                    },
            horizontalBarChart:function(data){
                  var svg = d3.select(".hbarchart"),
                       margin = 200,
                       width =  $('.col-md-8').width() - margin,
                       height =  500 - margin

                   svg.append("text")
                      .attr("transform", "translate(100,0)")
                      .attr("x", 50)
                      .attr("y", 50)
                      .attr("font-size", "24px")
                      .text("Foods Price")

                   var xScale = d3.scaleBand().range([0, width]).padding(0.4),
                       yScale = d3.scaleLinear().range([height, 0]);

                   var g = svg.append("g")
                              .attr("transform", "translate(" + 100 + "," + 100 + ")");

                       xScale.domain(data.map(function(d) { return d.year; }));
                       yScale.domain([0, d3.max(data, function(d) { return d.value; })]);

                       g.append("g")
                        .attr("transform", "translate(0," + height + ")")
                        .call(d3.axisBottom(xScale))
                        .append("text")
                        .attr("y", height - 250)
                        .attr("x", width - 100)
                        .attr("text-anchor", "end")
                        .attr("stroke", "black")
                        .text("Year");

                       g.append("g")
                        .call(d3.axisLeft(yScale).tickFormat(function(d){
                            return "$" + d;
                        })
                        .ticks(10))
                        .append("text")
                        .attr("transform", "rotate(-90)")
                        .attr("y", 6)
                        .attr("dy", "-5.1em")
                        .attr("text-anchor", "end")
                        .attr("stroke", "black")
                        .text("Stock Price");

                       g.selectAll(".bar")
                        .data(data)
                        .enter().append("rect")
                        .attr("class", "bar")
                        .attr("x", function(d) { return xScale(d.year); })
                        .attr("y", function(d) { return yScale(d.value); })
                        .attr("width", xScale.bandwidth())
                        .attr("height", function(d) { return height - yScale(d.value); });

            }

        },
        mounted() {
            console.log('Component mounted.')
            var that = this;
            d3.json('/api/pictures').then(function(data) {
              that.data = data;
                    that.verticalBarChart(data);
                    that.horizontalBarChart(data);
                });


        }


    }
</script>
<style>

.vbarchart rect, .hbarchart rect {
  fill: steelblue;
}

.vbarchart text {
  fill: white;
  font: 10px sans-serif;
  text-anchor: end;
}

</style>
