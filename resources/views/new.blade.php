<!DOCTYPE html>
<html ng-app="App" ng-controller="Ctrl">
  <head>
    <meta charset="utf-8">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <link  href="/css/font-awesome.min.css" rel="stylesheet">
    <link  href="/css/new_style.css" rel="stylesheet">
    <title>Virtual office</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
  </head>
  <body>
    <div  class="container"><!--start container-->
      <div class="row">
        <div class="col-md-12 no-padding">
          <header>
            <!--<ul>
              <li class="pl1"><a href="#" class="brand"><i class="fa fa-desktop"></i> Digital PA</a></li>
            </ul>
            <ul class="pull-right hidden-sm-down">
              <li><a href="#">help/support</a></li>
              <li><a href="#">settings</a></li>
              <li><a href="#"> peter njau</a></li>
            </ul>-->
            <nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
              </button>
              <a class="navbar-brand text-warning text-muted pr5" href="#">Digital PA</a>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                  <li class="nav-item">
                    <a class="nav-link text-white active" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">help/support</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">settings</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      peter njau
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Account</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> Membership</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-unlink"></i> Logout</a>
                    </div>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                </form>
              </div>
            </nav>
          </header>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 no-padding">
          <aside ng-cloak>
            <ul class="shelf-icons">
              <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;shelf_items=1"><a href="#"><i class="fa fa-book"></i></a></li>
              <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2;shelf_items=2"><a href="#"><i class="fa fa-file"></i></a></li>
              <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;shelf_items=3"><a href="#"><i class="fa fa-envelope"></i></a></li>
              <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;shelf_items=4"><a href="#"><i class="fa fa-globe"></i></a></li>
              <!--<li><a class="text-danger" href="#"><i class="fa fa-plus-circle"></i></a></li>-->
            </ul>
            <ul class="shelves">
              <li ng-click="active_shelf=1;shelf_items=1"><a href="#">cards</a></li>
              <li ng-click="active_shelf=2;shelf_items=2"><a href="#">cvs</a></li>
              <li ng-click="active_shelf=3;shelf_items=3"><a href="#"> letters</a></li>
              <li ng-click="active_shelf=4;shelf_items=4"><a href="#"> websites</a></li>
              <!--<li><a class="text-danger" href="#"> new shelf</a></li>-->
            </ul>
            <section class="desk" ng-show="shelf_items==1">
              <h2><i class="fa fa-folder-open" aria-hidden="true"></i> Cards <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul>
                <li ng-class="active_card_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_card_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=2" class="B">
                  <a href="#"><i class="fa fa-plane" aria-hidden="true" title="wamjai"></i></a>
                </li>
              </ul>
              <ul>
                <li ng-class="active_card_shelf_item==3 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=3" class="C">
                  <a href="#"><i class="fa fa-image" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_card_shelf_item==4 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=4" class="D">
                  <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-class="active_card_shelf_item==5 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=5" class="E">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_card_shelf_item==6 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=6" class="F">
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end cards shelf items-->
            <section class="desk" ng-show="shelf_items==2">
              <h2><i class="fa fa-folder-open" aria-hidden="true"></i> CVs <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul>
                <li ng-class="active_cv_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_cv_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_cv_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_cv_shelf_item=2" class="B">
                  <a href="#"><i class="fa fa-plane" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-class="active_cv_shelf_item==3 ? 'active' : 'inactive'" ng-click="active_cv_shelf_item=3" class="C">
                  <a href="#"><i class="fa fa-image" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end cvs shelf items-->
            <section class="desk" ng-show="shelf_items==3">
              <h2><i class="fa fa-folder-open" aria-hidden="true"></i> Letters <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul>
                <li ng-class="active_letter_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_letter_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_letter_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_letter_shelf_item=2" class="B">
                  <a href="#"><i class="fa fa-plane" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-class="active_letter_shelf_item==3 ? 'active' : 'inactive'" ng-click="active_letter_shelf_item=3" class="C">
                  <a href="#"><i class="fa fa-image" aria-hidden="true"></i></a>
                </li>
                <li ng-class="active_letter_shelf_item==4 ? 'active' : 'inactive'" ng-click="active_letter_shelf_item=4" class="D">
                  <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end letters shelf items-->
            <section class="desk" ng-show="shelf_items==4">
              <h2><i class="fa fa-folder-open" aria-hidden="true"></i> Websites <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul class="mb3">
                <li ng-class="active_website_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_letter_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end websites shelf items-->
          </aside>
        </div>
        <div class="col-md-9 no-padding" ng-cloak>
          <main ng-show="active_shelf==0">
            <h1><i class="icn fa fa-exclamation-triangle"></i> No open shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
          </main><!--end websites shelf-->
          <main ng-show="active_shelf==1">
            <h1><i class="icn fa fa-book"></i> Cards shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
            <article class="container biz-card" ng-show="active_card_shelf_item==1">
              <h2>@{{first_name}} <span  class="text-danger">@{{second_name}}</span></h2>
              <h3>@{{title}}</h3>
              <div class="row">
                <!--<div class="col-sm-1 no-padding">-->
                  <div class="bar2 bg-danger"></div>
                <!--</div>-->
                <!--<div class="col-sm-2 no-padding">-->
                  <div class="qr"></div>
                <!--</div>-->
                <!--<div class="col-sm-9 no-padding">-->
                  <div class="bar1"></div>
                <!--</div>-->
              </div>
                <!--<div class="col-sm-6"></div>-->
                <div class="card-details">
                  <ul>
                    <li><span class="fa fa-phone-square"> @{{telephone}}</span></li>
                    <li><span class="fa fa-envelope"> @{{email}}</span></li>
                    <li><span class="fa fa-map-marker"> @{{address}}</span></li>
                    <li><span class="fa fa-globe"> @{{website}}</span></li>
                  </ul>
                </div>
            </article>
            <div class="row controls" ng-show="active_card_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_card_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
          </main><!--end cards shelf-->
          <main ng-show="active_shelf==2">
            <h1><i class="icn fa fa-file"></i> CVs shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
          </main><!--end cvs shelf-->
          <main ng-show="active_shelf==3">
            <h1><i class="icn fa fa-envelope"></i> Letters shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
          </main><!--end letters shelf-->
          <main ng-show="active_shelf==4">
            <h1><i class="icn fa fa-globe"></i> Websites shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
          </main><!--end websites shelf-->
        </div>
      </div>
    </div><!--end container-->
    <script>
    var app = angular.module('App', []);
      app.controller('Ctrl', function($scope) {
        $scope.first_name= "John";
        $scope.second_name= "Doe";
        $scope.title= "software engineer/ designer";
        $scope.telephone= "0724942245";
        $scope.email= "kimpita9@gmail.com";
        $scope.address= "Tokyo koganei shi kajinocho 1-9-32";
        $scope.website= "http://localhost:8000/new";
        //display variables
        $scope.active_shelf = 1;
        $scope.shelf_items = 1;
        $scope.active_card_shelf_item=1;
        $scope.active_cv_shelf_item=1;
        $scope.active_letter_shelf_item=1;
        $scope.active_website_shelf_item=1;
      });
    </script>
  </body>
</html>
