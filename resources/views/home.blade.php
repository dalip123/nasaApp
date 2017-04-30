<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fire Fighters</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.js"></script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body ng-app="nasaApp">
<div class="fh5co-loader"></div>
	
	<div id="page" ng-controller="indexController">
	<nav class="" role="navigation" >
		<div class="container">
			<div class="navbar-header" height="500">
<a class="navbar-brand" href="#"><img src="images/Farm.jpg" height="100" width="100"></a>
</div>
</div>
	</nav>

	


	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<div class="row">
									<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
											<button type="" class="btn btn-default">Communers</button>								
									</div>
									<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
											<button  onclick= "#fh5co-blog" type="" class="btn btn-default">Fire Fighters</button>								
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-blog" class="fh5co-bg-section" section="">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Communers</h2>
					<p>Dont Panic we will help you.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="nasaApp">
							      <button style="width: 320px;" ng-click="getLocation()" class="btn btn-primary">SOS </button>
							</div>

						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" type="" class="btn btn-primary">FIRE WARNING</button>
						</div>

						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" type="" class="btn btn-primary">EVACUATION MAP</button>
						</div>
						</div> 
					</div>
				</div>
				</div>
		</div>
	</div>


	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Fire Fighters</h2>
					<p>INcoming!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							      <a style="width: 320px;"  class="btn btn-primary" href="{{url('pathtrace')}}">Find Route</a>
							</div>

						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" ng-click="start()" class="btn btn-primary">START</button>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" ng-click="stop()"  class="btn btn-primary">STOP</button>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" type="" class="btn btn-primary">Pause</button>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<button  style="width: 320px;" type="" class="btn btn-primary">Reset</button>
						</div>
						
						
						</div> 
					</div>
				</div>
				</div>
		</div>
	</div>
		<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			
			 <div class="row" ng-if="flag">
            <iframe src="{{url('index')}}" height="750" width="1300"></iframe>
        </div>
		</div>
	</div>

	<footer style="height: 100px; " id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Created by  <a
                  href="http://www.genithub.com/" target="_blank">Genithub</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
		

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
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

