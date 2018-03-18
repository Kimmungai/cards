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
    <div  class="container"><!--start container-->
      <div class="row">
        <div class="col-md-12 no-padding">
          <header ng-cloak>
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
        </div>
        <div class="col-md-9 no-padding" ng-cloak>
          <main ng-show="active_shelf==0">
            <h1><i class="icn fa fa-exclamation-triangle"></i> No open shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
          </main><!--end websites shelf-->
          <main ng-show="active_shelf==1">
            <h1><i class="icn fa fa-book"></i> Cards shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
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
            <div class="row controls" ng-show="active_cv_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_cv_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
            <article class="cv" ng-show="active_cv_shelf_item==1">
              <dl>
                <dt>
                  <h2 class="cv-theme-color">@{{first_name}} @{{second_name}}</h2>
                </dt>
                <dd>
                  <ul>
                    <li>@{{email}} <span class="cv-theme-color">EMAIL</span></li>
                    <li>@{{address}} <span class="cv-theme-color">ADDRESS</span></li>
                    <li>@{{telephone}} <span class="cv-theme-color">PHONE</span></li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <span class="cv-sec">Objective</span>
                <p>@{{cv_objective}}</p>
              </dl>
              <dl>
                <span class="cv-sec">Experience</span>
                <h3><span class="cv-theme-color"> @{{cv_experience_title}}</span> <strong class="title-addon">@{{cv_company}}</strong> - <span class="title-addon">@{{cv_company_address}}</span> <i class="title-addon">@{{cv_experience_start_date}} - @{{cv_experience_end_date}}</i></h3>
                <p>@{{cv_experience_item1}}<br/>@{{cv_experience_item2}}<br/>@{{cv_experience_item3}}</p>
              </dl>
              <dl>
                <span class="cv-sec">Education</span>
                <h3><span class="cv-theme-color"> @{{cv_education_title}}</span> <strong class="title-addon">@{{cv_education_univ}}</strong> - <span class="title-addon">@{{cv_company_address}}</span> <i class="title-addon">@{{cv_experience_start_date}} - @{{cv_experience_end_date}}</i></h3>
                <p>@{{cv_experience_item1}}<br/>@{{cv_experience_item2}}<br/>@{{cv_experience_item3}}</p>
              </dl>
              <dl class="no-border">
                <span class="cv-sec">Skills</span>
                <p>@{{cv_experience_item1}}<br/>@{{cv_experience_item2}}<br/>@{{cv_experience_item3}}</p>
              </dl>
            </article>
            <div class="row controls" ng-show="active_cv_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_cv_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
            <article class="cv" ng-show="active_cv_shelf_item==2">
            </article>
            <article class="cv" ng-show="active_cv_shelf_item==3">
            </article>
          </main><!--end cvs shelf-->
          <main ng-show="active_shelf==3">
            <h1><i class="icn fa fa-envelope"></i> Letters shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
            <div class="row controls" ng-show="active_letter_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_letter_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
            <article class="letter" ng-show="active_letter_shelf_item==1">
              <address>
                <ul>
                  <li>@{{letter_date | date:'dd MMMM yyyy'}}</li>
                  <li>@{{letter_to}}</li>
                  <li>@{{letter_to_org}}</li>
                  <li>@{{letter_to_add}}</li>
                </ul>
              </address>
              <h2>@{{letter_heading}}</h2></br>
              <span>@{{letter_salutation}},</span></br>
              <p>@{{letter_body}}</p>
              <span>@{{letter_sign_off}},</span></br>
              </br><span>@{{first_name}} @{{second_name}}</span></br>
              <span>Enclosure: Resume</span></br>
            </article>
            <div class="row controls" ng-show="active_letter_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_letter_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
          </main><!--end letters shelf-->
          <main ng-show="active_shelf==4" class="bg-white">
            <h1><i class="icn fa fa-globe"></i> Websites shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
            <div class="row controls" ng-show="active_website_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-globe"></span> Publish</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-edit"></span> Edit</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_website_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
            <div class="container website" ng-show="active_website_shelf_item==1">
              <header>
                <div class="row">
                  <nav class="navbar navbar-light navbar-toggleable-md">
                      <div class="container-fluid">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </div>
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <button class="menu-btn show-btn"></button>
                              <ul class="nav navbar-nav navbar-right">
                                  <li><a href="#home"  class="active">Home</a></li>
                                  <li><a href="#about-me">About Me</a></li>
                                  <li><a href="#my-service">My services</a></li>
                                  <li><a id="link" href="#contact-me">Contact</a></li>
                                  <li></li>
                              </ul><!-- end of /.ul -->
                          </div><!-- end of /.navbar-collapse -->

                      </div><!-- end of /.container-fluid -->
                  </nav><!-- end of /. nav section -->
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 profile-image wow bounceInUp center animated">
                      <img  class="img-responsive" src="@{{main_pic}}" alt="@{{first_name}} @{{second_name}}" />
                  </div><!-- end of /.column-->
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 profile-item wow flipInX center animated">
                      <article class="profile-caption">
                          <h2>Hello, I'm <span>@{{first_name}} @{{second_name}}</span></h2>
                          <h2>A <span>@{{profession}}</span> Based in <span>@{{location}}</span></h2>
                          <div class="social-media">
                              <a href="@{{facebook_link}}"><i class="fa fa-facebook"></i></a>
                              <a href="@{{twitter_link}}"><i class="fa fa-twitter"></i></a>
                              <a href="@{{google_plus_link}}"><i class="fa fa-google-plus"></i></a>
                              <a href="@{{linkedin_link}}"><i class="fa fa-linkedin"></i></a>
                              <a href="@{{git_hub_link}}"><i class="fa fa-github"></i></a>
                          </div>
                      </article>
                  </div> <!-- end of /.columns -->
                </div><!--end of row-->
              </header>
              <div class="container row">
                <div class="section-title" id="about-me">
                    <h2>About Me</h2><!-- section title -->
                </div>
                <div class="col-lg-6">
                    <article class="about-me-box">
                        <h2>A little brif ABOUT Me</h2>
                        <p>Ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem. ipsum dolor sit amet, consectetur adipisicing elit.<br><br>
                         sed do eiusmod temporincididunt ut labore et dolore magna aliqua. ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
                        <a href="#"><i class="fa fa-cloud-download"></i>Download Resume</a>
                    </article>
                </div>
                <div class="col-lg-6">
                    <div class="skill-box">
                        <h2>SKILLS</h2>
                        <p>Adobe Photoshop</p>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 81%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">81%</div>
                        </div>
                        <p>Adobe Illastrator</p>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">72%</div>
                        </div>
                        <p>Html & Css</p>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                        <p>Web Design</p>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div><!-- end of /.skill bx -->
                </div><!-- end of /.columns -->
              </div><!-- end of /.row -->
              <div class="work-section smoth">
                <div class="container">
                  <div class="row">
                    <div class="section-title" id="my-service">
                      <h2>MY AREAS OF SPECIALITY</h2><!-- section title -->
                    </div>
                    <div class="col-lg-6 mobile">
                        <article class="mobile-design work-box">
                            <i class="fa fa-mobile"></i><!-- icon -->
                            <h3>Mobile app design</h3><!-- title -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            <div class="dh-overlay"></div>
                        </article>

                    </div><!-- end of /.columns 1 -->
                    <div class="col-lg-6 template ">
                        <article class="template-design work-box">
                            <i class="fa fa-laptop"></i><!-- icon -->
                            <h3>Web Template Design</h3><!-- title -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            <div class="dh-overlay"></div>
                        </article>

                    </div><!-- end of /.columns 1 -->

                    <div class="col-lg-12 work-center-box">
                        <div class="main-center-item">
                            <div class="dot"></div>
                        </div>
                    </div><!--end of main center columns-->
                    <div class="col-lg-6 ui">
                        <article class="ui-design work-box">
                            <i class="fa fa-ils"></i><!-- icon -->
                            <h3>Ui Design</h3><!-- title -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            <div class="dh-overlay"></div>
                        </article><!-- end of /.design box -->

                    </div><!-- end columns 1 -->
                    <div class="col-lg-6 landing ">
                        <article class="landing-page work-box">
                            <i class="fa fa-clipboard dh-container"></i><!-- icon -->
                            <h3>Landing page</h3><!-- title -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            <div class="dh-overlay"></div>
                        </article><!-- end of /.design box -->

                    </div><!-- end columns 1 -->
                  </div><!--End of rows-->
                </div>
              </div><!--end work-section -->
              <div class="row contact-section">
                <div class="row container">
                  <div class="section-title" id="contact-me">
                      <h2>GET IN TOUCH</h2>
                  </div><!-- contact title -->
                  <div class="form-area">
                    <form role="form">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i> </div>
            						<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            					</div>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope-o"></i> </div>
            						<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            					</div>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-mobile"></i> </div>
            						<input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone">
            					</div>
                      <div class="input-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Your Message" cols="50"></textarea>
                      </div>
                      <button type="button" id="submit" name="submit" class="form-submit">Send</button>
                    </form>
                  </div><!--end form area-->
              </div><!--end form container-->
              <footer class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright 2015   | @{{first_name}} @{{second_name}} | All Rights Reserved |  Designed & Developed by  <a href="http://themencoder.com/">Voffice</a> </p>
                        </div><!-- coloumn -->
                    </div><!-- end of row -->
                </div><!-- end of /. container -->
            </footer><!-- end of /. footer section -->
            </div>
            <div class="row controls" ng-show="active_website_shelf_item==1">
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-globe"></span> Publish</a>
              </div>
              <div class="col-xs-3 ml-5">
                <a class="" href="#"><span class="fa fa-edit"></span> Edit</a>
              </div>
              <div class="col-xs-3 ml-5" ng-click="active_website_shelf_item=0">
                <a class="" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
          </main><!--end websites shelf-->
        </div>
      </div>
    </div><!--end container-->
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
        //display variables
        $scope.active_shelf = 1;
        $scope.shelf_items = 1;
        $scope.active_card_shelf_item=1;
        $scope.active_cv_shelf_item=1;
        $scope.active_letter_shelf_item=1;
        $scope.active_website_shelf_item=1;
        //cv content
        $scope.cv_objective="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.";
        $scope.cv_experience_title="Computer Programmer";
        $scope.cv_company="Excia East Africa Ltd";
        $scope.cv_company_address="Nairobi, Kenya";
        $scope.cv_experience_start_date="Jan-2017";
        $scope.cv_experience_end_date="Feb-2018";
        $scope.cv_experience_item1="-The standard Lorem Ipsum passage, used since the 1500";
        $scope.cv_experience_item2="-Section 1.10.33 of de 'Finibus Bonorum et Malorum', written by Cicero in 45 BC";
        $scope.cv_experience_item3="-1914 translation by H. Rackham";
        $scope.cv_education_title="BSc. Information Technology";
        $scope.cv_education_univ="Dedan Kimathi university";
        //letter content
        $scope.letter_date = new Date();
        $scope.letter_to = "John Makasi";
        $scope.letter_to_org = "Nyeri waters and sewerage company";
        $scope.letter_to_add = "P.O BOX 86-20107 NYERI";
        $scope.letter_heading = "Re: Customer Service Representative Opening (Ref. ID: CS300-Denver)";
        $scope.letter_salutation = "Dear Ms. Nogo";
        $scope.letter_body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $scope.letter_sign_off = "sincerely";
        //website content
        $scope.profession = "Programmer";
        $scope.location = "Njoro";
        $scope.main_pic = "img/profile.png";
        $scope.facebook_link = "img/profile.png";
        $scope.twitter_link = "img/profile.png";
        $scope.google_plus_link = "img/profile.png";
        $scope.linkedin_link = "img/profile.png";
        $scope.git_hub_link = "img/profile.png";
      });
    </script>
  </body>
</html>
