<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multi Bar Chart</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="form">
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Mumbai', 'Delhi', 'Gurugram', 'Bangalore', 'Chennai', 'Hyderabad'],
      datasets: [{
        label: 'Pass',
        data: [56, 113, 16, 14, 2, 8],
        backgroundColor: 'rgba(255, 26, 104, 0.2)',
        borderColor:'rgba(0, 0, 0, 1)',
        borderWidth: 1
      }, {
        label: 'Fail',
        data: [64, 167, 24, 18, 5, 18],
        backgroundColor: 'rgba(153, 102, 255, 0.2)',
        borderColor:'rgba(0, 0, 0, 1)',
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>

  </body>
</html>