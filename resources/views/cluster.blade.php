
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Marker Clustering</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: -28.024, lng: 140.887}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: -31.563910, lng: 147.154312},
        {lat: 28.6139, lng: 77.2090},
      {lat:10.304 , lng: -62.846 },  
{ lat: 10.304 ,  lng: -62.846},
{ lat: 7.548  , lng: -100.849 },
{  lat: 7.547 , lng: -100.859 },
{  lat: 7.613 , lng: -100.493 },
{  lat: 7.627 , lng: -100.462 },
{  lat: 7.643 , lng: -100.496 },
{  lat: 7.677 , lng: -100.312 },
{  lat: 7.665 , lng: -100.398 },
{  lat: 7.664 , lng: -100.407 },
{  lat: 7.687 , lng: -100.406 },
{  lat: 7.841 , lng: -93.116 },
{  lat: 8.064 , lng: -95.504 },
{  lat: 8.06  , lng: -95.51 },
{  lat: 8.059 , lng: -95.499 },
{  lat: 7.823 , lng: -94.662 },
{  lat: 7.095 , lng: -91.246 },
{  lat: 7.093 , lng: -91.236 },
{  lat: 7.033 , lng: -91.325 },
{  lat: 7.164 , lng: -92.963 },
{  lat: 7.828 , lng: -99.744 },
{  lat: 7.252 , lng: -95.471 },
{  lat: 7.251 , lng: -95.46 },
{  lat: 7.242 , lng: -95.461 },
{  lat: 6.819 , lng: -94.07 },
{  lat: 6.812 , lng: -94.081 },
{  lat: 6.81  , lng: -94.071 },
{  lat: 7.547 , lng: -100.852 },
{  lat: 6.855 , lng: -95.248 },
{  lat: 6.47  , lng: -93.951 },
{  lat: 6.462 , lng: -93.958 },
{  lat: 6.461 , lng: -93.949 },
{  lat: 6.968 , lng: -97.811 },
{  lat: 6.121 , lng: -92.226 },
{  lat: 4.81  , lng: -84.695 },
{  lat: 4.815 , lng: -84.698 },
{  lat: 6.909 , lng: -98.642 },
{  lat: 6.908 , lng: -98.626 },
{  lat: 5.971 , lng: -92.755 },
{  lat: 5.937 , lng: -93.081 },
{  lat: 6.048 , lng: -95.931 },
{  lat: 6.008 , lng: -96.697 },
{  lat: 4.432 , lng: -87.562 },
{  lat: 4.431 , lng: -87.566 },
{  lat: 4.407 , lng: -88.112 },
{  lat: .629    , lng: -61.139 },
{  lat: 5.54    , lng: -86.486 },
{  lat: 5.535   , lng: -86.493 },
{  lat: 5.1     , lng: -83.735 },
{  lat: 5.359   , lng: -86.528 },
{  lat: 4.498   , lng: -83.474 },
{  lat: 4.716   , lng: -87.628 },
{  lat: 2.587   , lng: -87.071 },
{  lat: 2.582   , lng: -87.08 },
{  lat: 0.866   , lng: -74.685 },
{  lat: .568    , lng: -75.173 },
{  lat: .494    , lng: -80.49 },
{  lat: .483    , lng: -80.19 },
{  lat: .446    , lng: -80.172 },
{  lat: .445    , lng: -80.162 },
{  lat: 0.822 , lng: -82.338 },
{  lat: 0.675 , lng: -82.167 },
{  lat: 0.675 , lng: -82.175 },
{  lat: 0.678 , lng: -83.931 },
{  lat: 2.456 , lng: -80.532 },
{  lat: 2.461 , lng: -80.538 },
{  lat: 2.244 , lng: -81.481 },
{  lat: 1.844 , lng: -79.945 },
{  lat: 1.842 , lng: -79.929 },
{  lat: 1.842 , lng: -79.936 },
{  lat: 1.277 , lng: -78.199 },
{  lat: 1.092 , lng: -78.028 },
{  lat: .642  , lng: -63.625 },
{  lat: .654  , lng: -63.543 },
{  lat: .654  , lng: -63.632 },
{  lat: .776  , lng: -63.456 },
{  lat: .969  , lng: -64.838 },
{  lat: 0.05  , lng: -64.895 },
{  lat: 0.056 , lng: -64.903 },
{  lat: 0.358 , lng: -63.454 },
{  lat: 0.353 , lng: -63.479 },
{  lat: 0.32  , lng: -63.673 },
{  lat: 0.286 , lng: -64.153 },
{  lat: 0.231 , lng: -64.473 },
{  lat: 0.353 , lng: -63.483 },
{  lat: 0.466 , lng: -63.178 },
{  lat: 0.296 , lng: -64.16 },
{  lat: .045  , lng: -61.454 },
{  lat: .039  , lng: -61.458 },
{  lat: .409  , lng: -62.263 },
{  lat: 1.802 , lng: -95.764 },
{  lat: 9.689 , lng: -96.208 },
{  lat: 9.123 , lng: -96.262 },
{  lat: 8.227 , lng: -102.091 },
{  lat: 7.294 , lng: -97.978 },
{  lat: 6.89  , lng: -98.918 },
{  lat: 6.888 , lng: -98.908 },
{  lat: 7.731 , lng: -106.18 },
{  lat: 7.05  , lng: -101.072 },
{  lat: 7.049 , lng: -101.062 },
{  lat: 6.887 , lng: -101.456 },
{  lat: 7.029 , lng: -108.054 },
{  lat: 7.032 , lng: -108.058 },
{  lat: 7.029 , lng: -108.027 },
{  lat: 5.872 , lng: -98.771 },
{  lat: 5.706 , lng: -99.854 },
{  lat: 5.102 , lng: -98.433 },
{  lat: 5.505 , lng: -103.535 },
{  lat: 4.786 , lng: -100.053 },
{  lat: 4.785 , lng: -100.043 },
{  lat: 4.267 , lng: -100.616 },
{  lat: 3.699 , lng: -99.101 },
{  lat: 3.294 , lng: -98.927 },
{  lat: 3.293 , lng: -98.917 },
{  lat: 0.508 , lng: -89.414 },
{  lat: 2.772 , lng: -102.741 },
{  lat: 2.852 , lng: -103.881 },
{  lat: 0.412 , lng: -89.401 },
{  lat: 0.41  , lng: -89.408 },
{  lat: 0.351 , lng: -89.38 },
{  lat: 2.836 , lng: -104.724 },
{  lat: 0.348 , lng: -89.386 },
{  lat: 2.22  , lng: -105.429 },
{  lat: 2.133 , lng: -105.254 },
{  lat: 9.473 , lng: -90.366 },
{  lat: 9.465 , lng: -90.33 },
{  lat: 9.483 , lng: -90.371 },
{  lat: 9.476 , lng: -90.335 },
{  lat: 9.467 , lng: -90.374 },
{  lat: 9.459 , lng: -90.338 },
{  lat: 9.317 , lng: -90.71 },
{  lat: 9.324 , lng: -90.713 },
{  lat: 9.07  , lng: -90.49 },
{  lat: 9.063 , lng: -90.454 },
{  lat: 9.064 , lng: -90.496 },
{  lat: 9.057 , lng: -90.461 },
{  lat: 8.832 , lng: -90.597 },
{  lat: 8.812 , lng: -91.033 },
{  lat: 8.818 , lng: -91.037 },
{  lat: 8.744 , lng: -91.155 },
{  lat: 8.75  , lng: -91.16 },
{  lat: 9.697 , lng: -96.533 },
{  lat: 0.716 , lng: -103.627 },
{  lat: 8.464 , lng: -90.849 },
{  lat: 8.457 , lng: -90.814 },
{  lat: 8.482 , lng: -90.816 },
{  lat: 8.494 , lng: -91.128 },
{  lat: 8.457 , lng: -91.102 },
{  lat: 8.45  , lng: -91.07 },
{  lat: 8.485 , lng: -91.135 },
{  lat: 8.463 , lng: -91.106 },
{  lat: 8.457 , lng: -91.073 },
{  lat: 8.488 , lng: -91.401 },
{  lat: 8.381 , lng: -91.021 },
{  lat: 8.372 , lng: -91.03 },
{  lat: 8.28  , lng: -90.98 },
{  lat: 8.286 , lng: -91.253 },
{  lat: 9.293 , lng: -96.757 },
{  lat: 9.291 , lng: -96.744 },
{  lat: 8.292 , lng: -91.258 },
{  lat: 8.241 , lng: -91.167 },
{  lat: 8.131 , lng: -90.946 },
{  lat: 8.244 , lng: -91.57 },
{  lat: 8.117 , lng: -90.92 },
{  lat: 8.041 , lng: -90.834 },
{  lat: 8.226 , lng: -91.951 },
{  lat: 8.096 , lng: -91.445 },
{  lat: 9.551 , lng: -99.862 },
{  lat: 7.864 , lng: -90.457 },
{  lat: 7.885 , lng: -90.645 },
{  lat: 7.876 , lng: -90.46 },
{  lat: 7.859 , lng: -90.464 },
{  lat: 8.992 , lng: -97.052 },
{  lat: 0.061 , lng: -104.511 },
{  lat: 0.059 , lng: -104.497 },
{  lat: 8.147 , lng: -92.489 },
{  lat: 0.057 , lng: -104.519 },
{  lat: 0.055 , lng: -104.504 },
{  lat: 8.711 , lng: -95.561 },
{  lat: 8.708 , lng: -95.546 },
{  lat: 8.159 , lng: -92.492 },
{  lat: 8.154 , lng: -92.466 },
{  lat: 8.145 , lng: -92.495 },
{  lat: 8.072 , lng: -92.114 },
{  lat: 8.991 , lng: -99.031 },
{  lat: 7.98  , lng: -93.17 },
{  lat: 7.653 , lng: -91.701 },
{  lat: 7.396 , lng: -90.511 },
{  lat: 7.389 , lng: -90.473 },
{  lat: 8.48  , lng: -96.284 },
{  lat: 9.077 , lng: -100.024 },
{  lat: 9.076 , lng: -100.015 },
{  lat: 9.068 , lng: -100.026 },
{  lat: 7.657 , lng: -91.706 },
{  lat: 9.069 , lng: -100.15 },
{  lat: 9.067 , lng: -100.141 },
{  lat: 7.392 , lng: -90.517 },
{  lat: 7.385 , lng: -90.479 },
{  lat: 7.838 , lng: -93.131 },
{  lat: 7.833 , lng: -93.107 },
{  lat: 7.846 , lng: -93.136 },
{  lat: 7.841 , lng: -93.112 },
{  lat: 8.163 , lng: -95.134 },
{  lat: 8.16  , lng: -95.118 },
{  lat: 8.035 , lng: -94.69 },
{  lat: 7.468 , lng: -92.17 },
{  lat: 7.444 , lng: -92.049 },
{  lat: 7.469 , lng: -92.176 },
{  lat: 7.446 , lng: -92.056 },
{  lat: 7.373 , lng: -91.917 },
{  lat: 8.905 , lng: -101.039 },
{  lat: 7.833 , lng: -94.665 },
{  lat: 7.82  , lng: -94.668 },
{  lat: 7.83  , lng: -94.672 },
{  lat: 7.293 , lng: -91.813 },
{  lat: 8.743 , lng: -100.563 },
{  lat: 8.742 , lng: -100.553 }
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApznemr_TP2D6TGfPsOSpiO37s_d6s1c0&callback=initMap">
    </script>
  </body>
</html>
