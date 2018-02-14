<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Virtual office dashboard</title>
    <link  href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="ribbon"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
          </div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        </div>
        <div id="main" class="col-md-6">
          @yield('desk')
        </div>
        <div class="col-md-2">
          <aside class="border">
            <div class="avatar">
              <img class="img-responsive rounded-circle" src="/img/profile.jpg">
            </div>
          </aside>
        </div>
      </div>
    </div>
    <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          //document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          //document.getElementById("main").style.marginLeft= "0";
      }
    </script>
  </body>
</html>
