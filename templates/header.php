<header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="logo">
            <a href="#"
              ><img class="logo__img" src="images/logo.png" alt="logo"
            /></a>
          </div>
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__item">
                <a class="menu__link" href="/index.php">Главная</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="/page-one.php">Страница 2</a>
              </li>
              <?php
            require_once('./handler/handler.php');
            foreach ($monthResultAll as $key => $item) { ?>
              <?php
             $month = $item['month'];
             $id = $item['id'];
?>
              <li class="menu__item">
                <a class="menu__link" id="month" href="/month.php?month=<?=$id ?>" ><?= $month ?></a>
              </li>
            <?php
            }

            ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>