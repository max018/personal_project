<!DOCTYPE html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--FONTS/STYLES-->
		<link href='https://fonts.googleapis.com/css?family=Geo:400,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Cuprum:400,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Geo:400,400italic' rel='stylesheet' type='text/css'>
		

		<!-- JQUERY \ ANGULAR -->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>


		<!-- BAXTER JS -->
		<script src="baxter.js"></script>	
		<link href='myproject.css' rel='stylesheet' type='text/css'>	
	</head>
	
	<body class="body" ng-app="tutorialApp" ng-controller="tutorialCtrl">	
		<div class="menu">
			<div class="title">
				NSX
			</div>
			<div class="menubar">
				<div class="menutext" ng-click="games()">GAMES</div>
			</div>
			<div class="dropdown" ng-if="View == 'gamesList'"><?php echo $_GET['page']?></div>
			<div class="menubar">
				<div class="menutext">MOVIES</div>
			</div>
			<div class="menubar">
				<div class="menutext">SHOWS</div>
			</div>
			<div class="menubar">
				<div class="menutext" style="margin-left: 0px">TECH</div>
			</div>
			<form class="menubarsearch">
                <input class="search" type="text" placeholder="Search..." required>
                <button class="button">Search</button>
			</form>
		</div>
	</body>
<html>