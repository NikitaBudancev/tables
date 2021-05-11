<DOCTYPE html >
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />



    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
<?php include('templates/header.php') ?>
<?php
      require_once './handler/handler.php';

?>
    <section class="content">
      <div class="container">
        <div class="content__inner">
          <div class="table">
            <div class="table__caption">
                 Сводная таблица:
            </div>
            <div class="table__inner">
            <div class="table__head table__line table__line--five">
                <div class="table__item">Сводная: </div>
                <div class="table__item text-center">123 123</div>
                <div class="table__item">1 231</div>
                <div class="table__item">122 000</div>
              </div>
              <div class="table__head table__line table__line--five">
                <div class="table__item">Дата</div>
                <div class="table__item text-center">Приход</div>
                <div class="table__item">Расход</div>
                <div class="table__item">Баланс</div>
                <div class="table__item">Комментарий</div>
              </div>
             <?php 
             
             foreach ($summaryAll as $key => $value) {?>

                   <? 
                   $monthId = $value['month'];
                   $arrival = $value['arrival'];
                   $spending = $value['spending'];
                   $comment = $value['comment'];
                   $balance = $value['balance'];
                ?>

                <div class="table__line table__line--five">
                <div class="table__item">
                  <input class="table__input" value="<?= $monthId ?>" type="text" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $arrival ?>" type="number" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $spending ?>" type="number" />
                </div>
                <div class="table__item">
                  <p class="table__input"/><?= $balance ?></p>
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $comment ?>" type="text" />
                </div>
              </div>
               <?
             }
             
             ?>
            <form class="table__line table__line--five">
                <div class="table__item">
                  <input class="table__input" name="date" id="date" required type="text"  placeholder="Дата"/>
                </div>
                <div class="table__item">
                  <input class="table__input" name="arrival" id="arrival" type="number"  placeholder="Приход"/>
                </div>
                <div class="table__item">
                  <input class="table__input" name="spending"  id="spending" type="number" placeholder="Расход" />
                </div>
                <div class="table__item">
                  <input class="table__input" name="comment" id="comment" type="text"  placeholder="Комментарий"/>
                </div>
                <div class="table__item">
                    <button class="table__input table__button">Добавить</button>
                </div>
            </form>
            </div>
           
            </div>
          </div>
    
          </div>
        </div>
    </section>
    <script src="js/month.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
