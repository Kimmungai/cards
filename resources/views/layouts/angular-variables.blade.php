<script>
var app = angular.module('App', []);
  app.controller('Ctrl', function($scope) {
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
    //number of cards
    $scope.cards = [
      {card_id:1, card_code:"A", first_name: "John", second_name:"Kimani",title:"software engineer/ designer", telephone:"0724942245", email:"kimpita9@gmail.com",address:"Tokyo koganei shi kajinocho 1-9-32",website:"http://localhost:8000/new",bar_code_url:"http://localhost:8000/new"},

    ];
  });
</script>
