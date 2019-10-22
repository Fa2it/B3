<template>
      <div class="container border">
        <h2>KPIs</h2>
        <div class="row">
            <div class="col-4 offset-4" >
                  <canvas id="pie-chart" height="100" width="100"></canvas>
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
                label: "Daily Popularity Chart",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: [2478,5267,734,784]
              }]
            },
            options: {
              title: {
                display: true,
                text: 'Daily Popularity Chart'
              },
              legend:{
                position:'right'
              }
            }
        });


        /*
        new Chart(document.getElementById("bar-chart-horizontal"), {
            type: 'horizontalBar',
            data: {
              labels: ["Africa", "Asia", "Europe", "Latin America"],
              datasets: [
                {
                  label: "Trend Chart",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                  data: [2478,5267,734,784]
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Trend Chart'
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
                  label: "Centiment Chart",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                  data: [2478,5267,734,784,433]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'Centiment Chart'
              }
            }
        });

        */

        }
    }
</script>


<style>

</style>
