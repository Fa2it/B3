<template>
      <div class="container border">
        <h2>KPIs</h2>
          <div class="row">
              <div class="col border" style="height:200px">
                  Daily Popularity Chart
                  <canvas id="pie-chart"></canvas>
                  daily
              </div>
              <div class="col border" style="height:200px">
                Trend Chart
                <canvas id="bar-chart-horizontal"></canvas>
              </div>
              <div class="col border" style="height:200px">
                Centiment Chart
                <canvas id="doughnut-chart"></canvas>
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
        // Pie chart
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
              labels: ["Africa", "Asia", "Europe", "Latin America"],
              datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: [2478,5267,734,784]
              }]
            },
            options: {
              title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
              }
            }
        });


        // Others
        new Chart(document.getElementById("bar-chart-horizontal"), {
            type: 'horizontalBar',
            data: {
              labels: ["Africa", "Asia", "Europe", "Latin America"],
              datasets: [
                {
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                  data: [2478,5267,734,784]
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
              }
            }
        });
        // HorizontalBarChart
        new Chart(document.getElementById("doughnut-chart"), {
            type: 'doughnut',
            data: {
              labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
              datasets: [
                {
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                  data: [2478,5267,734,784,433]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
              }
            }
        });



        }
    }
</script>


<style>

</style>
