<?php
include_once("api/db_connect.php");
$sql = "SELECT * FROM weather"; // select all column
$aresult = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Temprature Vs Weather</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['Time Stamp', 'Temprature', 'Humidity'],
                <?php
                while ($row = mysqli_fetch_assoc($aresult)) {
                    echo "['" . $row["time_stamp"] . "', " . $row["temp"] . ", " . $row["hum"] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Timestamp Vs Temprature , Humidity',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <br>
        <h2 align="center">Complete Weather Plot</h2><br />
        <a href="index.php" name="export" class="btn btn-primary" value="Go Back to home">Go Back to home</a>
        <a href="viewdata.php" name="plot" class="btn btn-info" value="Plot">View Data</a>
        <a href="plot2.php" name="plot2" class="btn btn-info" value="Plot">Plot 2</a>
        <div id="areachart" style="width: 100%; height: 500px"></div>
    </div>
</body>

</html>