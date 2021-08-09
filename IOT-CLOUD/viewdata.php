<?php
include_once("api/db_connect.php");
$sql = "SELECT * FROM weather";
$result = mysqli_query($conn, $sql);
?>
<html>

<head>
    <title>Complete Weather Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <div class="table-responsive">
            <h2 align="center">Complete Weather Data</h2><br />
            <p>Click Export to download the data</p>
            <form method="post" action="export.php">
                <input type="submit" name="export" class="btn btn-success" value="Export" />
                <a href="index.php" name="home" class="btn btn-primary" value="Go Back to home">Go Back to home</a>
                <a href="plot1.php" name="plot" class="btn btn-info" value="Plot">Plots</a>
            </form>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Temprature</th>
                    <th>Humidity</th>
                    <th>TimeStamp</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '  
       <tr>  
         <td>' . $row["id"] . '</td>  
         <td>' . $row["temp"] . '</td>  
         <td>' . $row["hum"] . '</td>
         <td>' . $row["time_stamp"] . '</td> 
       </tr>  
        ';
                }
                ?>
            </table>
            <br />
            <form method="post" action="export.php">
                <input type="submit" name="export" class="btn btn-success" value="Export" />
            </form>
        </div>
    </div>
</body>

</html>