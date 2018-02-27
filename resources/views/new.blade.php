<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <link  href="/css/font-awesome.min.css" rel="stylesheet">
    <link  href="/css/new_style.css" rel="stylesheet">
    <title>Virtual offiece</title>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container"><!--start container-->
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
                    <a class="nav-link dropdown-toggle text-white" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <aside>
            <ul class="shelf-icons">
              <li class="active"><a href="#"><i class="fa fa-book"></i></a></li>
              <li><a href="#"><i class="fa fa-file"></i></a></li>
              <li><a href="#"><i class="fa fa-folder"></i></a></li>
              <li><a href="#"><i class="fa fa-globe"></i></a></li>
            </ul>
            <ul class="shelves">
              <li><a href="#">cards</a></li>
              <li><a href="#">cvs</a></li>
              <li><a href="#"> letters</a></li>
              <li><a href="#"> websites</a></li>
            </ul>
            <div class="add-shelf"> <a href="#"><i class="fa fa-plus-circle"></i> new shelf</a></div>
          </aside>
        </div>
        <div class="col-md-9 no-padding">
          <main>
            <h1><i class="fa fa-book"></i> Cards shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
            <article class="container card">
              <h2>Peter <span class="text-danger">Kimani</span></h2>
              <h3>web/graphic designer</h3>
              <div class="row">
                <div class="col-md-1 no-padding">
                  <div class="bar1"></div>
                </div>
                <div class="col-md-2 no-padding">
                  <div class="qr"></div>
                </div>
                <div class="col-md-9 no-padding">
                  <div class="bar2 bg-danger"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 card-details">
                  <ul>
                    <li><span class="fa fa-phone-square"> (+81)-803-1568-951</span></li>
                    <li><span class="fa fa-envelope"> admin@webdesignerscenter.com</span></li>
                    <li><span class="fa fa-map-marker"> Tokyo koganei shi kajinocho 1-9-32</span></li>
                    <li><span class="fa fa-globe"> https://webdesignerscenter.com/</span></li>
                  </ul>
                </div>
              </div>
            </article>
            <div class="row controls">
              <div class="col-md-3">
                <a class="btn btn-info" href="#"><span class="fa fa-print"></span> Print</a>
              </div>
              <div class="col-md-3">
                <a class="btn btn-info" href="#"><span class="fa fa-telegram"></span> Mail</a>
              </div>
              <div class="col-md-3">
                <a class="btn btn-info" href="#"><span class="fa fa-share-alt"></span> Share</a>
              </div>
              <div class="col-md-3">
                <a class="btn btn-info" href="#"><span class="fa fa-times"></span> close</a>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div><!--end container-->
  </body>
</html>
