<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nasa App</title>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.js"></script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body ng-app="nasaApp" >
       <div class="container" ng-controller="indexController">
        <div class="row">
            <br>
            <div class="col-md-6" id="nasaApp">
            <button class="btn btn-primary" ng-click="getLocation()">SOS</button>

<p id="demo"></p>


            </div>
            <div class="col-md-6">
             <button class="btn btn-primary" ng-click="start()">Start</button>
             <button id="stop" class="btn btn-primary" ng-click="stop()" >Stop</button>
             <button id="stop" class="btn btn-primary">Pause</button>
             <button id="stop" class="btn btn-primary" >Restart</button>
            </div>
        </div>
        <div class="row" ng-if="flag">
            <iframe src="{{url('index')}}" height="750" width="1300"></iframe>
        </div>
       </div>
     <script>
   var app = angular.module('nasaApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
 
app.controller('indexController', function($scope,$http) {

    $scope.getLocation = function(){
       $scope.flag=1;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        
    } 



    };

    var seti;

    
    $scope.start = function () {
          $scope.time=new Date();
          alert($scope.time);
          angular.element(document.getElementById('nasaApp')).scope().getLocation();
        /*
          var delayMillis = 3000;  
          $scope.stopClicked=0;
          $scope.i=0;
          while(!$scope.stopClicked && $scope.i<10000)
          {
            
             setTimeout(function() {
          console.log("Time pass"); 
                 
           }, delayMillis);     
          
          $scope.i++;
          }
          */
                 
          
    };
    $scope.stop=function () {
      $scope.stopped=1;
      alert("stop path tracing.");
    
    };
    $scope.storeData= function (latitude,longitude) {
       return $http.get('http://127.0.0.1:8000/admin/'+latitude+'/'+longitude).then(function(response) {
           alert(response.data);
});
    }
        
});
function showPosition(position) {
   /*alert("Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude);*/
    angular.element(document.getElementById('nasaApp')).scope().storeData(position.coords.latitude,position.coords.longitude);
}


</script>

    </body>
</html>
