(function(){
	var app = angular.module('gifter',[]);

	app.controller('userController',function($scope,$http){
		
	  	$scope.users = [];

		$http.get('users').success(function(data) {
			 $scope.users = data;
		 });
	});
	 
	app.controller('giftController',function($scope,$http){
		
	  	$scope.items = [];

		$http.get('shop-items').success(function(data) {
			 $scope.items = data;
		 });
	});

	app.controller('popularController',function($scope, $http){

		$scope.populars = [];

		$http.get('popular').success(function(data){
			$scope.populars = data;
		});

	});

})();