<html>
  <head>
    <meta charset="utf-8">
    <script type="tex/javascript" src="..libs/angular.js"></script>
    <script type="tex/javascript" src="..libs/angular.min.js"></script>
    <link rel="stylesheet" href="../libs/bootstrap-3.3.5-dist/css/bootstrap.min.css"  title="no title" charset="utf-8">
    <link rel="stylesheet" href="styles/mainPage.css" type="text/css">
    <link rel="stylesheet" href="styles/shop-panel.css" type="text/css">
    <?php require_once('php-blocks/db_connection.php'); ?>
    <title>KAMALI</title>
  </head>
  <body>
    <div class="section-1">
      <img id="logo" alt="logo" src="images/logo-1.png"/>
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Главная</a></li>
            <li><a href="aboutUs.php">О нас</a></li>
            <li><a href="#" id="down">Поиск по сайту</a></li>
            <li><a href="shop.php">Магазин</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <h1 class="header" id="shop-header">Интернет-магазин</h1>
    <nav id="stackPanel" class="navbar navbar-default">
      <div class="container" id="leftNav">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Уход за телом</a></li>
            <li><a href="#">Уход за лицом</a></li>
            <li><a href="#">Уход за волосами</a></li>
            <li><a href="#">Мыло</a></li>
            <li><a href="#">Новинки</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row" id="shop-block">
      <?php $result = $conn->query("SELECT * FROM products");
      while($row = $result->fetch_array())
          {
      ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="<?php echo $row['image']?>">
          <div class="caption">
            <h3><?php echo $row['name'] ?></h3>
            <p><?php echo $row['caption']?></p>
            <div class="buttns">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="setId(<?php echo $row['id'] ?>)">Читать</button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Купить</button>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" ng-app="call" ng-controller="myCont">
          <?php $result = $conn->query("SELECT * FROM products WHERE id ='{{x}}'");
          while($row = $result->fetch_array())
              {
          ?>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $row['name'] ?></h4>
          </div>
          <div class="modal-body">
            <p class="caption-product"><?php echo $row['full'] ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary">Купить</button>
          </div>
          <?php } ?>
        </div>
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
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
  </script>
  <script type="text/javascript">
    function setId(id) {
      console.log(id);
    }
    var myApp = angular.module('call', ['ui.bootstrap']);
    myApp.controller("myCont", function($scope){
      $scope.x = 1;
    });
  </script>
</html>
