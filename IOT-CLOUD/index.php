<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Vikkey" content="Vivek Gupta & IoTMonk">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="styless.css">
	<title>ESP8266 NodeMCU Temperature &amp; Humidity Sensor From PHP API</title>

</head>

<body>
	<div class="container1">
		<h1>ESP8266 NODEMCU Temperature and Humidity Dashboard</h1>
		<p>Click the below links to view plots and data</p>
		<a href="plot1.php">Plot 1</a><br><a href="plot1.php">Plot 2</a><br><a href="plot1.php">View Data</a>
	</div>
	<div class="container">
		<div class="weather-side">
			<div class="weather-gradient"></div>
			<div class="date-container">
				<h2 class="date-dayname" id="date-dayname">Tuesday</h2>
				<span id="date-day-day">15 </span>
				<span id="date-day"> 15 Jan 2019</span>
				<span id="date-year">2019</span>
				<i class="location-icon" data-feather="map-pin"></i><span class="location">Hyderabad,HYD</span>
			</div>
			<div class="weather-container"><i class="weather-icon" data-feather="sun"></i>
				<div id="weather-temp">
					<h1 id='weather-temp' class='weather-temp'>0°C</h1>
				</div>
				<div id="weather-desc">Humidity: 0%</div>
			</div>
		</div>
	</div>
</body>

<script src="main1.js"></script>

</html>