var app = angular.module("myModule", [])
				.controller("myController", function($scope, $http, $timeout){
					
					$http.get('select.php').then(function(response){
						$scope.members = response.data;
					});
					
					$scope.insertData = function(){
						$http.post("insert.php", {firstname: $scope.firstname})
						.then(function(){
							$scope.message = "Successfully Submit!";
							$scope.msgBox = true;
							$scope.firstname = "";
						
							$timeout(function(){
								$scope.msgBox = false;
							}, 2000);
							$scope.selectData();
						});	
					}
					
					$scope.selectData = function(){
						$http.get('select.php').then(function(response){
							$scope.members = response.data;
						});
					}	
				});