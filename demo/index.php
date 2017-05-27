<?php
  require_once('php-blocks/session.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../libs/bootstrap-3.3.5-dist/css/bootstrap.min.css"  title="no title" charset="utf-8">
    <link rel="stylesheet" href="styles/mainPage.css" type="text/css">
    <title>KAMALI</title>
  </head>
  <body>
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
            <li><a href="#">Карта сайта</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" alt="carousel">
    <div class="carousel-inner" role="listbox">
      <div id="one" class="item active">
        <img src="images/slide1.jpg" alt="...">
        <div class="carousel-caption"></div>
      </div>
      <div id="two" class="item">
        <img  src="images/7.jpeg" alt="...">
        <div class="carousel-caption"></div>
      </div>
      <div id="three" class="item">
        <img src="images/slide3.jpg" alt="...">
        <div class="carousel-caption"></div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div class="section-3" alt="map">
      <div id="wpcumuluswidgetcontent">
        <p align="center">
        	<br>
        	<br>
        	<br>
        	<br>
        	<a href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="nofollow"><font color="black"><b>Скачать Adobe Flash Player</b></font></a>
        </p>
      </div>
      <!--Тут я брала с orlenok.do.am облако тегов-->
    	<script type="text/javascript" src="http://orlenok.do.am/swfobject.js"></script>
    	<script type="text/javascript">
        var rnumber = Math.floor(Math.random()*9999999);
        var widget_so = new SWFObject("http://orlenok.do.am/tagcloud.swf?r="+rnumber, "tagcloudflash", "1358", "658", "14", "#ffffff");
        widget_so.addParam("allowScriptAccess", "always");
        widget_so.addVariable("tcolor", "#008080");
        widget_so.addVariable("tspeed", "150");
        widget_so.addVariable("distr", "true");
        widget_so.addVariable("mode", "tags");
        widget_so.addVariable("tagcloud", "<tags><a class='tags' href='aboutUs.php' style='12'>О нас</a><a class='tags' href='#' style='12'>Контакты</a><a class='tags' href='shop.php' style='12'>Магазин</a><a class='tags' href='#' style='12'>Доставка и оплата</a><a class='tags' href='#' style='12'>Сотрудничество</a><a class='tags' href='#' style='12'>Новинки</a><a class='tags' href='#' style='12'>Отзывы</a><a class='tags' href='#' style='12'>Где купить</a></tags>");
        widget_so.write("wpcumuluswidgetcontent");
      </script>
    </div>
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
  </body>
  <script src="../libs/jquery/jQuery-2.1.4.min.js" charset="utf-8"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  <script type = "text/javascript">
  $("#down").click(function(){
  var height=$("body").height();
  $("body").animate({"scrollTop":height},”slow”);
  });

  </script>
</html>
