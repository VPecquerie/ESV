var monApplication = angular.module('monApplication', []).config(function($interpolateProvider)
{
  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

monApplication.controller('ProductListController', function($scope,$http)
{
  $http.get(urlCategories).success(function(data)
  {
    $scope.categories = data;
  });

  $http.get(urlProducts).success(function(data)
  {
    $scope.products = data;
  });

});
