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


		<!-- BAXTER CONFIG -->
		<script src="baxter.js"></script>	
		<script src="jquery.slides.min.js"></script>
		<link href='myproject.css' rel='stylesheet' type='text/css'>	
	</head>
	
	<body class="body" ng-app="tutorialApp" ng-controller="tutorialCtrl">	
		<div class="menu">
			<div class="title">
				NDX
			</div>
			<div class="menubar">
				<div class="menutext">GAMES</div>
				<div class="dropdownFrame">	
					<div class="dropdown">Reviews</div>
					<div class="dropdown" ng-click="news()">News</div>
					<div class="dropdown">Videos</div>
					<div class="dropdown" style="padding-bottom: 3px">Trailers</div>
				</div>
			</div>
			
			<div class="menubar">
				<div class="menutext" ng-click="movies()">MOVIES</div>
				<div class="dropdownFrame">	
					<div class="dropdown">Trailers</div>
					<div class="dropdown">Dates</div>
					<div class="dropdown">Interviews</div>
					<div class="dropdown" style="padding-bottom: 3px">Reviews</div>
				</div>
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
		<div class="newshome" ng-if="View == 'news'">
			<div class="pictwo">
				<div class="pictwoframe">
					<div class="text2">
						<p>Should you be playing overwatch?</p>
					</div>
				</div>
				<div class="picone">
					<div class="piconeframe">
						<div class="text1">
							<p>The Witcher 3: Blood and Wine. New screenshots of The Land of Love and Wine</p>
						</div>
						<button class="piconebutton" ng-click="storyOne()">See the story</button>
					</div>
				</div>
			</div>
		</div>
		<div ng-if="View == 'witcherStory'">Suh</div>
	</body>
<html>