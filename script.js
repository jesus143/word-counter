var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.textArea = "";
    $scope.counterTotalWords = function() {
        return  $scope.textArea.length ;
    }
});