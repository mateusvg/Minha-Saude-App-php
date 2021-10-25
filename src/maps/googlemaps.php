<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
  </head>
  <body>
    <input
      id="pac-input"
      class="controls"
      type="text"
      placeholder="Search Box"
    />
    <div id="map"></div>



 <!--GEOLOCALIZAÇÃO  HTML5-->
 <p>Clique para buscar sua localização</p>

<button onclick="getLocation()">Localização</button>

<p id="demo"></p>

<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }

    let lat = -19.8157
    let lon = -43.9542

function myMap() {
var mapProp= {
  center:new google.maps.LatLng( lat, lon),
  zoom:16,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu8gwDYdD61W3MJLSzXNoOGCSK5SA6kYo&callback=myMap"></script>

</body>
</html>