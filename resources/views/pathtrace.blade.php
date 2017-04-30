<html>
<body>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var stavanger = new google.maps.LatLng(28.5451765,77.3310059);
  var amsterdam = new google.maps.LatLng(28.5951765,77.3610059);
    var a1 = new google.maps.LatLng(28.5952765,77.3710059);
        var a3 = new google.maps.LatLng(28.6091765,78.3615059);
  var london = new google.maps.LatLng( 29.6151765,79.3623059);

  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: amsterdam, zoom: 4};
  var map = new google.maps.Map(mapCanvas,mapOptions);

  var flightPath = new google.maps.Polyline({
    path: [stavanger, amsterdam, a1,a3,london],
    strokeColor: "#0000FF",
    strokeOpacity: 0.8,
    strokeWeight: 2
  });
  flightPath.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApznemr_TP2D6TGfPsOSpiO37s_d6s1c0&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>