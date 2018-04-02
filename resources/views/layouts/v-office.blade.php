<!DOCTYPE html>
<html ng-app="App" ng-controller="Ctrl">
  <head>
    <meta charset="utf-8">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <link  href="/css/font-awesome.min.css" rel="stylesheet">
    <link  href="/css/new_style.css" rel="stylesheet">
    <link  href="/css/website.css" rel="stylesheet">
    <title>Virtual office</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
  </head>
  <body>
    <div  class="container"><!--start of app container-->
      <div class="row"><!--start of header section-->
          <header class="bg-dark" ng-cloak>
            <div class="container">
              <div class="row">
                <div class="col-sm-8">
                  <h1 class="text-warning"><a href="/">BiznessKit</a></h1>
                </div>
                <div class="col-sm-4">
                    <ul class="list-inline account-nav">
                      <li class="list-inline-item"><a href="#"><span class="fa fa-user"></span> @{{cards[0].first_name}} @{{cards[0].second_name}}</a></li>
                      <li class="list-inline-item"><a href="#"><span class="fa fa-unlink"></span> logout</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </header>
      </div><!--end of header section-->

      <div class="row"><!--start of row dividing screen into two-->
        <div class="col-md-3 no-padding"><!--start of aside section-->
          <aside ng-cloak>
            <ul class="shelf-icons">
              <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;shelf_items=1"><a href="#"><i class="fa fa-book"></i></a></li>
              <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2;shelf_items=2"><a href="#"><i class="fa fa-bullseye"></i></a></li>
              <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;shelf_items=3"><a href="#"><i class="fa fa-question"></i></a></li>
           </ul>
            <ul class="shelves">
              <li ng-click="active_shelf=1;shelf_items=1"><a href="#">Website</a></li>
              <li ng-click="active_shelf=2;shelf_items=1"><a href="#">
                <div class="row">
                  <div class="col-sm-3">
                    <a href="#" class="btn btn-primary"></a>
                  </div>
                  <div class="col-sm-3">
                    <a href="#" class="btn btn-danger"></a>
                  </div>
                  <div class="col-sm-3">
                    <a href="#" class="btn btn-warning"></a>
                  </div>
                </div>
              </a></li>
              <li ng-click="active_shelf=3;shelf_items=1"><a href="#"> Help</a></li>
            </ul>
            <section class="desk" ng-show="shelf_items==1">
              <h2><i class="fa fa-briefcase" aria-hidden="true"></i> My tools <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul class="mb3">
                <li ng-repeat="card in cards" ng-class="active_card_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="@{{card.card_code}}">
                  <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </li>
                <li  ng-class="active_card_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="B">
                  <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul>
                <li  ng-class="active_card_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="C">
                  <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
                </li>
                <li  ng-class="active_card_shelf_item==2 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="D">
                  <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end cards shelf items-->
          </aside>
        </div><!--end of aside section-->

        <div class="col-md-9 no-padding" ng-cloak><!--Start of main section-->
          @yield('main')
        </div>
      </div><!--end of main section-->

    </div><!--start of row dividing screen into two-->
  </div><!--end container-->


  <div class="container edit-pane" ng-cloak ng-show="edit_card==1"><!--edit card panel starts-->
    <div class="container">
      <div class="row">
        <div class="col-md-3 no-padding edit-form-sec">
          <span class="close" ng-click="edit_card=0"><i class="fa fa-close" aria-hidden="true"></i></span>
          <h2><i class="fa fa-edit" aria-hidden="true"></i> Card edit panel</h2>
          <form>
            <div class="form-group">
              <label for="first_name">Theme</label>
              <div class="row">
                <div class="col-sm-3">
                  <a href="#" class="btn btn-primary"></a>
                </div>
                <div class="col-sm-3">
                  <a href="#" class="btn btn-danger"></a>
                </div>
                <div class="col-sm-3">
                  <a href="#" class="btn btn-warning"></a>
                </div>
                <div class="col-sm-3">
                  <a href="#" class="btn btn-info"></a>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="first_name">First name</label>
              <input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="cards[0].first_name">
            </div>
            <div class="form-group">
              <label for="second_name">Last name</label>
              <input type="text" class="form-control" id="second_name" placeholder="E.g. Smith" ng-model="second_name">
            </div>
            <div class="form-group">
              <label for="title">Profession</label>
              <input type="text" class="form-control" id="title" placeholder="E.g. Engineer" ng-model="title">
            </div>
            <div class="form-group">
              <label for="bar_code_url">Bar code url</label>
              <input type="text" class="form-control" id="bar_code_url" placeholder="" ng-model="bar_code_url">
            </div>
            <div class="form-group">
              <label for="telephone">Phone</label>
              <input type="text" class="form-control" id="telephone" placeholder="E.g. 08031568951" ng-model="telephone">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="E.g. psmith@gmail.com" ng-model="email">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" ng-model="address">
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="" ng-model="website">
            </div>
            <div class="form-group">
              <a class="" href="#" ng-click="edit_card=0"><span class="fa fa-thumbs-up"></span> Done</a>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div><!--edit card panel ends here-->

  <div class="container edit-pane" ng-cloak ng-show="edit_cv_basic==1"><!--edit cv panel starts-->
    <div class="container">
      <div class="row">
        <div class="col-md-3 no-padding edit-form-sec">
          <span class="close" ng-click="edit_cv_basic=0"><i class="fa fa-close" aria-hidden="true"></i></span>
          <h2><i class="fa fa-edit" aria-hidden="true"></i> CV edit panel</h2>
          <form>
            <div class="form-group">
              <label for="first_name">First name</label>
              <input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="first_name">
            </div>
            <div class="form-group">
              <label for="second_name">Last name</label>
              <input type="text" class="form-control" id="second_name" placeholder="E.g. Smith" ng-model="second_name">
            </div>
            <div class="form-group">
              <label for="telephone">Phone</label>
              <input type="text" class="form-control" id="telephone" placeholder="E.g. 08031568951" ng-model="telephone">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="E.g. psmith@gmail.com" ng-model="email">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" ng-model="address">
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="" ng-model="website">
            </div>
            <div class="form-group">
              <a class="btn btn-success" href="#" ng-click="edit_cv_basic=0"><span class="fa fa-thumbs-up"></span> Done</a>
              <a class="btn btn-info" href="#" ng-click="edit_cv_basic=0;edit_cv_experience=0;edit_cv_objective=1">Next <span class="fa fa-chevron-right"></span></a>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div><!--edit cv experience panel ends here-->
  @extends('layouts.angular-variables')
  </body>
</html>
