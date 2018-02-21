<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <?php

  $title = 'katfish';
  if(isset($_GET['utm_content'])){$title = $_GET['utm_content'];}

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

      <header>
        <div class="row">
          <div class="col-4 col-md-2">
            <img src="img/logo.svg" class="logo">
          </div> 
          <div class="col-8 col-md-10">
            <p class="text-right phone">+7 (968) 504-37-74</p>
          </div>
        </div>
      </header>

      <section id="first-screen">

        <div class="row">
          <div class="col-12 col-md-6 col-lg-5">
            <h1 class="text-center text-sm-left">Заказать футболку<br><span class="font-weight-bold"><?=$title_text ?></span></h1>
            <form action="mail.php" method="POST" id="top-form" class="d-none d-lg-block">
              <div class="row">
                <div class="col-9">
                  <div class="form-group form-input">
                    <label for="inpit-name">Имя</label>
                    <input type="text" class="form-control" id="input-name" placeholder="Введите имя" required="true">
                  </div>
                  <div class="form-group form-input">
                    <label for="input-phone">Телефон</label>
                    <input type="text" class="form-control" id="input-phone" placeholder="+7 (" required="true">
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-10">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked required="true">
                    <label class="form-check-label" for="exampleCheck1">Нажимая кнопку «Отправить» Вы принимаете <a href="">соглашение на обработку персональныз данных</a>.</label>
                  </div>
                  <button type="submit" class="btn btn-red">Отправить</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col col-md-6 col-lg-7">
            <p class="text-right"><img src="img/<?=$title?>.png" class="tshirt <?=$title?>"></p>
            <div class="price">1000 ₽</div>
          </div>
          <div class="col-12 text-center d-lg-none">
            <button type="button" class="btn btn-red" data-toggle="modal" data-target="#exampleModal">
              Заказать
            </button>
          </div>
        </div>
      </section>
    </div>
  </div> <!--wrapper -->

  <section id="advantages">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/003-washing-machine-for-laundry.svg" alt="" class="advantages-icon">
            <p>Выдерживает <br> <b>50 стирок</b></p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/001-startup.svg" alt="" class="advantages-icon">
            <p>Печать<br><b>в день обращения</b></p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/007-cotton-polo-shirt.svg" alt="" class="advantages-icon">
            <p>Печать <b>на своих</b><br>или <b>Ваших</b> футболках</p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/006-cotton.svg" alt="" class="advantages-icon">
            <p><b>100% хлопок</b></p>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/008-soccer-t-shirt.svg" alt="" class="advantages-icon">
            <p>Различные<br> способы печати</p> 
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 text-center">
          <div class="advantages-item">
            <img src="img/002-package.svg" alt="" class="advantages-icon">
            <p><b>Доставка</b><br>Курьером</p>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <section id="horizontal-offer">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">Сделать заказ</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <form>
            <div class="form-row form-input">
              <div class="col-12 col-sm-4">
                <label for="input-bottom-name">Имя</label>
                <input type="text" name="input-bottom-name" id="input-bottom-name" class="form-control" placeholder="Имя">
              </div>
              <div class="col-12 col-sm-4">
                <label for="input-bottom-phone">Телефон</label>
                <input type="phone" name="input-bottom-phone" id="input-bottom-phone" class="form-control" placeholder="+7 (">
              </div>
              <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-red">Отправить заявку</button>
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" checked="true">
                <label class="form-check-label" for="gridCheck">Нажимая кнопку «Отправить» Вы принимаете <a href="">соглашение на обработку персональныз данных</a>.</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-10 offset-2">
            <p class="white">&copy; 2018 - eprint.ru</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Отправить заявку</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
             <div class="form-group">
              <label for="exampleInputEmail2">Имя</label>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="Имя">
            </div>
            <div class="form-group">
             <label for="exampleInputEmail2">Телефон</label>
             <input type="phone" class="form-control" id="exampleInputPhone2" placeholder="+7 (">
           </div>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-red">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>