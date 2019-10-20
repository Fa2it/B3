<template>
  <div class="row" id='dashboard'>
      <div class="col"><canvas id="myPie" width="400" height="400"></canvas></div>
      <div class="col"><canvas id="myChart" width="400" height="400"></canvas></div>

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
          var ctxpie = document.getElementById('myPie').getContext('2d');
          // For a pie chart
          var myPieChart = new Chart(ctxpie, {
              type: 'pie',
              data: {
                    datasets: [{
                      data: [10, 20, 30],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(54, 162, 235, 0.2)'
                      ],
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                      'Red',
                      'Yellow',
                      'Blue'
                    ],

              },
              // options: options
          });

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    }
</script>


<style>

</style>
