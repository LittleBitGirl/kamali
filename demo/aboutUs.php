<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../libs/bootstrap-3.3.5-dist/css/bootstrap.min.css"  title="no title" charset="utf-8">
    <link rel="stylesheet" href="styles/mainPage.css" type="text/css">
    <title>KAMALI</title>
  </head>
  <body>
    <div class="top">
      <div class="section-1">
        <div class="left-logo">
          <!-- <img id="logo-1" alt="logo-1" src="images/one.png"/> -->
          <!-- <p id="alt-logo">Натуральная косметика</p> -->
        </div>
        <img id="logo" alt="logo" src="images/logo-1.png"/>
        <!-- <img id="kz" alt="since" src="images/JUST.png"/> -->
      </div>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Главная</a></li>
              <li><a href="aboutUs.php">О нас</a></li>
              <li><a href="" id="down">Поиск по сайту</a></li>
              <li><a href="shop.php">Магазин</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="about-section">
      <div id = "parent" class="background">
        <img id="0" class="active" src="images/five.jpg"/>
        <img id="1" src="images/six.jpg"/>
        <img id="2" src="images/7.jpeg"/>
        <img id="3" src="images/grade.jpg"/>
        <img id="4" src="images/slide1.jpg"/>
        <img id="5" src="images/three.jpg"/>
        <img id="6" src="images/four.jpg"/>
        <img id="7" src="images/one.jpg"/>
        <img id="8" src="images/slide4 .jpg"/>
        <img id="9" src="images/ten.jpg"/>
        <img id="10" src="images/two.jpg"/>
      </div>
      <div class="front-slide">
        <h1 class="header">Команда КАМАЛИ</h1>
        <div class="hole1"></div>
        <div class="person1">
          <h3 class="label">Алина Минибаева</h3>
          <p id="description1">Lorem ipsum dolor sit amet, consectetur
             adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit
             in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat
          </p>
        </div>
        <div class="hole2"></div>
        <div class="person2">
          <h3 class="label">Камила Юнусова</h3>
          <p id="description2">Lorem ipsum dolor sit amet, consectetur
             adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit
             in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat
          </p>
        </div>
    </div>
    <footer class="foot">
      <div class="row" id="search">
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
            <input type="text" class="form-control" placeholder="Я ищу...">
          </div>
        </div>
      </div>
      <div class="section-6" alt="footer">
        <p>Адрес: 050059, Алматы, ул. Пушкина, д. 27 | Тел.: 8 707 777-99-01 | © 2017 Сделано в Assina's studio.</p>
      </div>
    </footer>
  </body>
  <script src="../libs/jquery/jQuery-2.1.4.min.js" charset="utf-8"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  <script type = "text/javascript">
  function cycleImages(){
    var $active = $('#parent .active');
    var $next = ($active.next().length > 0) ? $active.next() : $('#parent img:first');
    $next.css('z-index',2);
    $next.css('visibility', 'visible');
    $active.fadeOut(1500,function(){
      $active.css('z-index',1).show().removeClass('active');
      $active.css('visibility', 'hidden');
      $next.css('z-index', 3).addClass('active');
    });
  }
  $(document).ready(function(){
    setInterval('cycleImages()', 5000);
  });
  </script>
</html>
