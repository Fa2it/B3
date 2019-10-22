<template>
  <div class="container border">
    <div class="row">
        <div class="col" style="min-height:200px">
          <h2>Trend Map</h2>
          <canvas id="line-chart" width="800" height="450"></canvas>
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
        new Chart(document.getElementById("line-chart"), {
                type: 'line',
                data: {
                  labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                  datasets: [{
                      data: [2120,2100,1780,1988,2178,1800,1900,1708,1798,1780],
                      label: "#Donald Trump",
                      borderColor: "#3e95cd",
                      fill: false
                    }
                  ]
                },
                options: {
                  title: {
                    display: true,
                    text: 'Tweeter Counts'
                  }
                }
              });

        }
    }
</script>


<style>

</style>
