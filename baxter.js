var app = angular.module('tutorialApp', []);

app.controller('tutorialCtrl', ['$scope',
	function($scope){

		$scope.news = function(){
			$scope.View = 'news';
		}

		$scope.movies = function(){
			$scope.View = 'moviesList';
		}

		$scope.storyOne = function(){
			$scope.View = 'witcherStory';
		}
	}
]);