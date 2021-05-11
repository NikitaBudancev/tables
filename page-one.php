<!DOCTYPE html>
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
              Сводная таблица всех сумм со всех месяцев:
            </div>
            <div class="table__inner">
              <div class="table__head table__line table__line--six">
                <div class="table__item">2021</div>
                <div class="table__item text-center">Приход</div>
                <div class="table__item">Расход на з/п</div>
                <div class="table__item">Адм. расходы</div>
                <div class="table__item">Остаток</div>
                <div class="table__item">Прибыль</div>
              </div>
              <div class="table__line table__line--six">
                <div class="table__item">Январь</div>
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
                <div class="table__item">Февраль</div>
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
                <div class="table__item">Март</div>
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
                <div class="table__item">Апрель</div>
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
                <div class="table__item">Май</div>
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
                <div class="table__item">Июнь</div>
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
                <div class="table__item">Июль</div>
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
                <div class="table__item">Август</div>
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
                <div class="table__item">Сентярь</div>
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
                <div class="table__item">Октябрь</div>
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
                <div class="table__item">Ноябрь</div>
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
                <div class="table__item">Декабрь</div>
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
