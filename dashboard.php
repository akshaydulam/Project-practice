<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Welcome to the dashboard page.</p>
        <p><a href="welcome.php">Bar Chart</a></p>
    </div>
    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script>
        const labels = ['Pass', 'Fail'];
        const data = {
        labels: [
        'Pass',
        'Fail'
        ],
        datasets: [{
        label: 'My First Dataset',
        data: [209, 296],
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)'
        ],
        hoverOffset: 4,
        }],
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                responsive: false,
                plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Doughnut Chart of Pass and Fail'
                }
                }
            },
        };
    </script>
    <script>
        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
</script>
</body>
</html>