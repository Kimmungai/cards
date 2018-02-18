<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Virtual office dashboard</title>
    <link  href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="ribbon"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div id="mySidenav" class="sidenav border">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="shelf">
              <h2> Cards</h2>
            </div>
            <div class="shelf">
              <h2> Cvs</h2>
            </div>
            <div class="shelf">
              <h2> Letters</h2>
            </div>
            <div class="shelf">
              <h2>Websites</h2>
            </div>
            <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>-->
          </div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div id="main" class="col-md-7">
          @yield('desk')
        </div>
        <div class="col-md-2">
          <aside class="border profile">
            <a href="#"><div class="avatar"></div></a>
            <h2><a href="#">Peter Njui</a></h2>
            <ul>
              <li><a href="#">profile</a></li>
              <li><a href="#">support</a></li>
              <li class="text-muted"><a href="#">logout</a></li>
            </ul>
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
