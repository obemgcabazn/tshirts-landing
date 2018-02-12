<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
  $title = $_GET['utm_content'];

  $title_text = "с любым принтом";

  if($title == 'batman') { $title_text = 'Batman'; }
  if($title == 'katfish') { $title_text = 'Кот и Рыба'; }
  if($title == 'marvel'){ $title_text = 'Marvel'; }
  if($title == 'pinky'){ $title_text = 'Джеси Пинкман'; }
  if($title == 'trasher'){ $title_text = 'Trasher'; }
  if($title == 'wot'){ $title_text = 'World of Tanks'; }
  ?>

  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <img src="img/logo.svg" class="logo">
        </div>
        <div class="col-8">
          <p class="text-right phone">
            +7 (968) 504-37-74
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h1>Заказать футболку<br><span class="font-weight-bold"><?=$title_text ?></span></h1>
        </div>
        <div class="col">
          <img src="img/<?=$title?>.png" class="tshirt">
          <div class="price">1000 ₽</div>
        </div>
        <div class="col-12">
          <p class="desc">
            Женские и мужские, размеры XS-XXL
          </p>
        </div>
        <div class="col text-center">
          <button class="btn-red">
            Заказать
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="advantages">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="" alt="">
          <p>Выдерживает 50 стирок</p>
        </div>
        <div class="col">
          <img src="" alt="">
          <p>Печать в день обращения</p>
        </div>
        <div class="col">
          <img src="" alt="">
          <p>Печать на своих или Ваших футболках</p>
        </div>
        <div class="col">
          <img src="" alt="">
          <p>100% хлопок</p>
        </div>
        <div class="col">
          <img src="" alt="">
          <p>Различные способы печати</p>
        </div>
        <div class="col">
          <img src="" alt="">
          <p>Доставка Курьером</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>