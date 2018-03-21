<script>
var app = angular.module('App', []);
  app.controller('Ctrl', function($scope) {
    $scope.first_name= "John";
    $scope.second_name= "Kimani";
    $scope.title= "software engineer/ designer";
    $scope.telephone= "0724942245";
    $scope.email= "kimpita9@gmail.com";
    $scope.address= "Tokyo koganei shi kajinocho 1-9-32";
    $scope.website= "http://localhost:8000/new";
    $scope.bar_code_url= "http://localhost:8000/new";
    //display variables
    $scope.active_shelf = 1;
    $scope.shelf_items = 1;
    $scope.active_card_shelf_item=1;
    $scope.active_cv_shelf_item=1;
    $scope.active_letter_shelf_item=1;
    $scope.active_website_shelf_item=1;

    //Edit items variables
    $scope.edit_card = 0;
    $scope.edit_cv_basic = 0;
    $scope.edit_cv_objective = 0;
    $scope.edit_cv_experience = 0;
  });
</script>
