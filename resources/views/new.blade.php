@extends('layouts.v-office')
@section('main')
<main ng-show="active_shelf==0">
  <h1><i class="icn fa fa-exclamation-triangle"></i> No open shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
</main><!--end websites shelf-->

<main ng-show="active_shelf==4">
  <h1><i class="icn fa fa-book"></i> Business card </span></h1>
  <article ng-repeat="card in cards" class="container biz-card" ng-show="active_card_shelf_item==1">
    <h2>@{{card.first_name}} <span  class="text-danger">@{{card.second_name}}</span></h2>
    <h3>@{{title}}</h3>
    <div class="row">
        <div class="bar2 bg-danger"></div>
        <div class="qr"></div>
        <div class="bar1"></div>
    </div>
      <div class="card-details">
        <ul>
          <li><span class="fa fa-phone-square"> @{{card.telephone}}</span></li>
          <li><span class="fa fa-envelope"> @{{card.email}}</span></li>
          <li><span class="fa fa-map-marker"> @{{card.address}}</span></li>
          <li><span class="fa fa-globe"> @{{card.website}}</span></li>
        </ul>
      </div>
  </article>
  <ul class="list-inline item-controls" ng-show="active_card_shelf_item==1">
    <li class="list-inline-item"><a class="" href="#"><span class="fa fa-print"></span> Print</a></li>
    <li class="list-inline-item" ng-click="edit_card=1"><a  href="#"><span class="fa fa-edit"></span> Edit</a></li>
    <li class="list-inline-item" ng-click="edit_card=1"><a  href="#"><span class="fa fa-download"></span> Download</a></li>
    <li class="list-inline-item" ng-click="active_card_shelf_item=0"><a class="" href="#"><span class="fa fa-times"></span> close</a></li>
  </ul>
</main><!--end cards shelf-->
<main ng-show="active_shelf==1" class="bg-white">
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
                <h2>@{{tag_line_1}}</h2>
                <h2>@{{tag_line_2}}</h2>
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
          <h2>@{{about_title}}</h2><!-- section title -->
      </div>
      <div class="col-lg-6">
          <article class="about-me-box">
              <h2>@{{about_story_title}}</h2>
              <p>@{{about_story}}</p>
              <a href="#" ng-show="resume_downloadable==1"><i class="fa fa-cloud-download"></i>Download Resume</a>
          </article>
      </div>
      <div class="col-lg-6">
          <div class="skill-box">
              <h2>@{{skill_title}}</h2>
              <p>@{{skill_1}}</p>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: @{{skill_1_level}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@{{skill_1_level}}%</div>
              </div>
              <p>@{{skill_2}}</p>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: @{{skill_2_level}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@{{skill_2_level}}%</div>
              </div>
              <p>@{{skill_3}}</p>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: @{{skill_3_level}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@{{skill_3_level}}%</div>
              </div>
              <p>@{{skill_4}}</p>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: @{{skill_4_level}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@{{skill_4_level}}%</div>
              </div>
          </div><!-- end of /.skill bx -->
      </div><!-- end of /.columns -->
    </div><!-- end of /.row -->
    <div class="work-section smoth">
      <div class="container">
        <div class="row">
          <div class="section-title" id="my-service">
            <h2>@{{speciality_title}}</h2><!-- section title -->
          </div>
          <div class="col-lg-6 mobile">
              <article class="mobile-design work-box border-right">
                  <i class="fa @{{speciality_1_icon}}"></i><!-- icon -->
                  <h3>@{{speciality_1}}</h3><!-- title -->
                  <p>@{{speciality_1_text}}</p><!-- caption -->
                  <div class="dh-overlay"></div>
              </article>

          </div><!-- end of /.columns 1 -->
          <div class="col-lg-6 template">
              <article class="template-design work-box">
                    <i class="fa @{{speciality_2_icon}}"></i><!-- icon -->
                    <h3>@{{speciality_2}}</h3><!-- title -->
                    <p>@{{speciality_2_text}}</p><!-- caption -->
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
                    <i class="fa @{{speciality_3_icon}}"></i><!-- icon -->
                    <h3>@{{speciality_3}}</h3><!-- title -->
                    <p>@{{speciality_3_text}}</p><!-- caption -->
                  <div class="dh-overlay"></div>
              </article><!-- end of /.design box -->

          </div><!-- end columns 1 -->
          <div class="col-lg-6 landing ">
              <article class="landing-page work-box">
                    <i class="fa @{{speciality_4_icon}}"></i><!-- icon -->
                    <h3>@{{speciality_4}}</h3><!-- title -->
                    <p>@{{speciality_4_text}}</p><!-- caption -->
                  <div class="dh-overlay"></div>
              </article><!-- end of /.design box -->

          </div><!-- end columns 1 -->
        </div><!--End of rows-->
      </div>
    </div><!--end work-section -->
    <div class="row contact-section">
      <div class="row container">
        <div class="section-title" id="contact-me">
            <h2>@{{contact_section_title}}</h2>
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
@endsection
