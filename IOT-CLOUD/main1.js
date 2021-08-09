window.onload = function () {
  loaddata();
};
function loaddata() {
  var url = "http://localhost/iot-cloud-wheather-1/api/read_all.php";
  $.getJSON(url, function (data) {
    var val = data;
    var humid = data["weather"][Object.keys(data["weather"]).length - 1]["hum"];
    var temper =
      data["weather"][Object.keys(data["weather"]).length - 1]["temp"];
    document.getElementById("weather-temp").innerHTML =
      "<h1 id='weather-temp' class='weather-temp'>" + temper + "°C</h1>  ";
    document.getElementById("weather-desc").innerHTML =
      "<h3 class='weather-desc'>Humidity : " + humid + "%</h3>  ";
  });
}
window.setInterval(function () {
  loaddata();
}, 5000);

window.onload = function () {
  var d = new Date();
  var n = d.getDay();
  var month = d.getMonth();
  document.getElementById("date-day-day").innerHTML = d.getDate();
  document.getElementById("date-year").innerHTML = d.getFullYear();
  if (month == 0) {
    document.getElementById("date-day").innerHTML = "January";
  } else if (month == 1) {
    document.getElementById("date-day").innerHTML = "February";
  } else if (month == 2) {
    document.getElementById("date-day").innerHTML = "March";
  } else if (month == 3) {
    document.getElementById("date-day").innerHTML = "April";
  } else if (month == 4) {
    document.getElementById("date-day").innerHTML = "May";
  } else if (month == 5) {
    document.getElementByID("date-day").innerHTML = "June";
  } else if (month == 6) {
    document.getElementById("date-day").innerHTML = "July";
  } else if (month == 7) {
    document.getElementById("date-day").innerHTML = "August";
  } else if (month == 8) {
    document.getElementById("date-day").innerHTML = "September";
  } else if (month == 9) {
    document.getElementById("date-day").innerHTML = "October";
  } else if (month == 10) {
    document.getElementById("date-day").innerHTML = "November";
  } else if (month == 11) {
    document.getElementById("date-day").innerHTML = "December";
  }
  if (n == 0) {
    document.getElementById("date-dayname").innerHTML = "Sunday";
  } else if (n == 1) {
    document.getElementById("date-dayname").innerHTML = "Monday";
  } else if (n == 2) {
    document.getElementById("date-dayname").innerHTML = "Tuesday";
  } else if (n == 3) {
    document.getElementById("date-dayname").innerHTML = "Wednesday";
  } else if (n == 4) {
    document.getElementByID("date-dayname").innerHTML = "Thursday";
  } else if (n == 5) {
    document.getElementById("date-dayname").innerHTML = "Friday";
  } else if (n == 6) {
    document.getElementById("date-dayname").innerHTML = "Saturday";
  }
};
