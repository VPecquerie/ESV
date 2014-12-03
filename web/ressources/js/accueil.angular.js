var monApplication = angular.module('monApplication', []).config(function($interpolateProvider)
{
  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

monApplication.controller('ProductListController', function($scope,$http)
{
  $scope.affichage = "vignette";
  $scope.ordre = "nom";
  $scope.sens = true;
  $scope.collonnefiltre = "$";

  $http.get(urlProducts).success(function(data)
  {
    $scope.products = data;

  });

});
