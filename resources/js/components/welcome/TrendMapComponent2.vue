<template>
  <div class="container border">
    <div class="row">
        <div class="col-8" style="min-height:200px">
          <h2>Trend Map</h2>
          <canvas id="trend-mixed-chart" width="800" height="450"></canvas>
        </div>
        <div class="col-4" style="min-height:200px">
            <h2>World Clouds</h2>
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

/******************************************************************************/
      },
      mounted() {
        new Chart(document.getElementById("trend-mixed-chart"), {
            type: 'bar',
            data: {
              labels: ["1900", "1950", "1999", "2050"],
              datasets: [{
                  label: "Europe",
                  type: "line",
                  borderColor: "#8e5ea2",
                  data: [408,547,675,734],
                  fill: false
                }, {
                  label: "Africa",
                  type: "line",
                  borderColor: "#3e95cd",
                  data: [133,221,783,2478],
                  fill: false
                }, {
                  label: "Europe",
                  type: "bar",
                  backgroundColor: "rgba(0,0,0,0.2)",
                  data: [408,547,675,734],
                }, {
                  label: "Africa",
                  type: "bar",
                  backgroundColor: "rgba(0,0,0,0.2)",
                  backgroundColorHover: "#3e95cd",
                  data: [133,221,783,2478]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'Population growth (millions): Europe & Africa'
              },
              legend: { display: false }
            }
        });

        }
    }
</script>


<style>

</style>
