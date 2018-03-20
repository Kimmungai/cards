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
        <div class="col-md-12 no-padding">
          <header ng-cloak>
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
                      @{{first_name}} @{{second_name}}
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
      </div><!--end of header section-->

      <div class="row"><!--start of row dividing screen into two-->
        <div class="col-md-3 no-padding"><!--start of aside section-->
          <aside ng-cloak>
            <ul class="shelf-icons">
              <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;shelf_items=1"><a href="#"><i class="fa fa-book"></i></a></li>
              <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2;shelf_items=2"><a href="#"><i class="fa fa-file"></i></a></li>
              <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;shelf_items=3"><a href="#"><i class="fa fa-envelope"></i></a></li>
              <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;shelf_items=4"><a href="#"><i class="fa fa-globe"></i></a></li>              <!--<li><a class="text-danger" href="#"><i class="fa fa-plus-circle"></i></a></li>-->
            </ul>
            <ul class="shelves">
              <li ng-click="active_shelf=1;shelf_items=1"><a href="#">cards</a></li>
              <li ng-click="active_shelf=2;shelf_items=2"><a href="#">cvs</a></li>
              <li ng-click="active_shelf=3;shelf_items=3"><a href="#"> letters</a></li>
              <li ng-click="active_shelf=4;shelf_items=4"><a href="#"> websites</a></li>
            </ul>
            <section class="desk" ng-show="shelf_items==1">
              <h2><i class="fa fa-folder-open" aria-hidden="true"></i> Cards <span class="close" ng-click="shelf_items=0; active_shelf=0"><i class="fa fa-close" aria-hidden="true"></i></span></h2>
              <ul>
                <li ng-class="active_card_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_card_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i></a>
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
                <li ng-class="active_website_shelf_item==1 ? 'active' : 'inactive'" ng-click="active_website_shelf_item=1" class="A">
                  <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end websites shelf items-->
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
              <label for="first_name">First name</label>
              <input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="first_name">
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
              <a class="btn btn-success" href="#" ng-click="edit_card=0"><span class="fa fa-thumbs-up"></span> Done</a>
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

  <div class="container edit-pane" ng-cloak ng-show="edit_cv_objective==1"><!--edit cv objective panel starts-->
    <div class="container">
      <div class="row">
        <div class="col-md-3 no-padding edit-form-sec">
          <span class="close" ng-click="edit_cv_objective=0"><i class="fa fa-close" aria-hidden="true"></i></span>
          <h2><i class="fa fa-edit" aria-hidden="true"></i> CV Objective</h2>
          <form>
            <div class="form-group">
              <label for="cv_objective">Objective</label>
              <textarea type="text" class="form-control" id="cv_objective" placeholder="Your career objective" ng-model="cv_objective" rows="5"></textarea>
            </div>
            <div class="form-group">
              <a class="btn btn-success" href="#" ng-click="edit_cv_objective=0"><span class="fa fa-thumbs-up"></span> Done</a>
              <a class="btn btn-info" href="#" ng-click="edit_cv_basic=0;edit_cv_objective=0;edit_cv_experience=1">Next <span class="fa fa-chevron-right"></span></a>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div><!--edit cv objective panel ends here-->

  <div class="container edit-pane" ng-cloak ng-show="edit_cv_experience==1"><!--edit cv experience panel starts-->
    <div class="container">
      <div class="row">
        <div class="col-md-3 no-padding edit-form-sec">
          <span class="close" ng-click="edit_cv_experience=0"><i class="fa fa-close" aria-hidden="true"></i></span>
          <h2><i class="fa fa-edit" aria-hidden="true"></i> CV Experience edit panel</h2>
          <form>
            <div class="form-group">
              <label for="cv_experience_title_1">Experience 1</label>
              <input type="text" class="form-control mb1" id="cv_experience_title_1" placeholder="Job title" ng-model="cv_experience_title_1">
              <input type="text" class="form-control mb1" id="cv_company_1" placeholder="Company name" ng-model="cv_company_1">
              <input type="text" class="form-control mb1" id="cv_company_address_1" placeholder="Company address" ng-model="cv_company_address_1">
              <input type="text" class="form-control mb1" id="cv_experience_start_date_1" placeholder="Start date" ng-model="cv_experience_start_date_1">
              <input type="text" class="form-control mb1" id="cv_experience_end_date_1" placeholder="End date" ng-model="cv_experience_end_date_1">
              <textarea  class="form-control" id="cv_experience_item1_1" ng-model="cv_experience_item1_1" rows="5" placeholder="Statement one"></textarea>
            </div>

            <div class="form-group" ng-if="cv_experience_2 == 1">
              <label for="cv_experience_title_2">Experience 2</label>
              <input type="text" class="form-control mb1" id="cv_experience_title_2" placeholder="Job title" ng-model="cv_experience_title_2">
              <input type="text" class="form-control mb1" id="cv_company_2" placeholder="Company name" ng-model="cv_company_2">
              <input type="text" class="form-control mb1" id="cv_company_address_2" placeholder="Company address" ng-model="cv_company_address_2">
              <input type="text" class="form-control mb1" id="cv_experience_start_date_2" placeholder="Start date" ng-model="cv_experience_start_date_2">
              <input type="text" class="form-control mb1" id="cv_experience_end_date_2" placeholder="End date" ng-model="cv_experience_end_date_2">
              <textarea  class="form-control" id="cv_experience_item1_2" ng-model="cv_experience_item1_2" rows="5" placeholder="Statement one"></textarea>
            </div>

            <div class="form-group" ng-if="cv_experience_3 == 1">
              <label for="cv_experience_title_2">Experience 3</label>
              <input type="text" class="form-control mb1" id="cv_experience_title_3" placeholder="Job title" ng-model="cv_experience_title_3">
              <input type="text" class="form-control mb1" id="cv_company_3" placeholder="Company name" ng-model="cv_company_3">
              <input type="text" class="form-control mb1" id="cv_company_address_3" placeholder="Company address" ng-model="cv_company_address_3">
              <input type="text" class="form-control mb1" id="cv_experience_start_date_3" placeholder="Start date" ng-model="cv_experience_start_date_3">
              <input type="text" class="form-control mb1" id="cv_experience_end_date_3" placeholder="End date" ng-model="cv_experience_end_date_3">
              <textarea  class="form-control" id="cv_experience_item1_2" ng-model="cv_experience_item1_2" rows="5" placeholder="Statement one"></textarea>
            </div>

            <a href="#" ng-click="cv_experience_2 = 1" ng-if="cv_experience_2 == 1"><span class="fa fa-plus-circle"></span> Add experience</a>

            <div class="form-group">
              <a class="btn btn-success" href="#" ng-click="edit_cv_experience=0"><span class="fa fa-thumbs-up"></span> Done</a>
              <!--<a class="btn btn-info" href="#" ng-click="edit_cv=0">Next <span class="fa fa-chevron-right"></span></a>-->
            </div>
         </form>
        </div>
      </div>
    </div>
  </div><!--edit cv experience panel ends here-->

    @extends('layouts.angular-variables')
  </body>
</html>
