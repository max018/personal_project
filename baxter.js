var app = angular.module('tutorialApp', []);

app.controller('tutorialCtrl', ['$scope',
	function($scope){

		$scope.games = function(){
			$scope.View = 'gamesList';
		}

		$scope.movies = function(){
			$scope.View = 'moviesList';
		}
	}
]);

$(function(){
    $("#slides").slidesjs({
        width: 940,
    	height: 528
   	});
});