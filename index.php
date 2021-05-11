<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>dev.craftdev.ru</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include('templates/header.php') ?>
  <section class="content">
    <div class="container">
      <div class="content__inner">
        <div class="table">
          <div class="table__caption">
            Таблица зарплат по месяцам:
          </div>
          <form class="form table__inner">
            <div class="table__head table__line">
              <div class="table__item">Месяц</div>
              <div class="table__item">Итого:</div>
              <div class="table__item">Антон</div>
              <div class="table__item">Рома</div>
              <div class="table__item">Денис</div>
              <div class="table__item">Женя</div>
              <div class="table__item">Никита</div>
            </div>

            <?php

            require_once('handler/handler.php');

            foreach ($resultAll as $key => $item) { ?>
              <?php
              $month = $item['month'];
              $total = $item['totalLine'];
              $anton = $item['anton'];
              $roma = $item['roma'];
              $denis = $item['denis'];
              $zhenya = $item['zhenya'];
              $nikita = $item['nikita'];

              if ($month == 1) {
                  $month = 'Январь';
              }
              if ($month == 2) {
                  $month = 'Февраль';
              }
              if ($month == 3) {
                  $month = 'Март';
              }
              if ($month == 4) {
                  $month = 'Апрель';
              }
              if ($month == 5) {
                  $month = 'Май';
              }
              if ($month == 6) {
                  $month = 'Июнь';
              }
              if ($month == 7) {
                  $month = 'Июль';
              }
              if ($month == 8) {
                  $month = 'Август';
              }
              if ($month == 9) {
                  $month = 'Сентярь';
              }
              if ($month == 10) {
                  $month = 'Октябрь';
              }
              if ($month == 11) {
                  $month = 'Ноябрь';
              }
              if ($month == 12) {
                  $month = 'Декабрь';
              }
                ?>

              <div class="table__line" id="form-january">
                <div class="table__item"><?= $month ?></div>
                <div class="table__item"><?= $total == 0 ? '' : $total  ?></div>
                <div class="table__item">
                  <input class="table__input" value="<?= $anton == 0 ? '' : $anton  ?>" name="anton" type="number" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $roma == 0 ? '' : $roma  ?>" name="roma" type="number" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $denis == 0 ? '' : $denis  ?>" name="denis" type="number" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $zhenya == 0 ? '' : $zhenya ?>" name="zhenya" type="number" />
                </div>
                <div class="table__item">
                  <input class="table__input" value="<?= $nikita == 0 ? '' : $nikita  ?>" name="nikita" type="number" />
                </div>
              </div>
            <?php
            }

            ?>
        </div>
        <div class="table">
          <div class="table__caption">
            Таблица банковских карт:
          </div>
          <div class="table__inner">
            <div class="table__line table__head table__line--six">
              <div class="table__item">ФИО</div>
              <div class="table__item text-center">aнтон</div>
              <div class="table__item">Рома</div>
              <div class="table__item">Денис</div>
              <div class="table__item">Женя</div>
              <div class="table__item">никита</div>
            </div>
            <div class="table__line table__line--six">
              <div class="table__item">СберБанк</div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
            </div>
            <div class="table__line table__line--six">
              <div class="table__item">Тинькофф</div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
            </div>
            <div class="table__line table__line--six">
              <div class="table__item">Другой Банк</div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
            </div>
            <div class="table__line table__line--six">
              <div class="table__item">Дата Рождения</div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
              <div class="table__item">
                <input class="table__input" type="number" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
