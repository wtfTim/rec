<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <!-- ------------------БАННЕР--------------------------  -->

  <div class="bunner">
    <div class="section">
      <div class="head_grid">
        <div class="logo">
          <a href="index.php"><img src="media/Glavnay/лого.png" alt="" /></a>
        </div>

        <div class="head_text">
          <a href="onas.php">О нас</a>
          <a href="katalog.php">Каталог</a>
          <a href="">Контакты</a>
        </div>

        
        

        <div class="head_poisk">
          <p>поиск по сайту</p>
          <a href=""><img src="media/Glavnay/poisk.png" alt="" /></a>
        </div>

        <div class="head_langu">
          <a href=""><img src="media/Glavnay/язык.png" alt="" /></a>
        </div>

        <div class="head_sign">
          <a href="signup.php"><img src="media/Glavnay/вход.png" alt="" /></a>
        </div>
        <div class="burger-menu">
          <div class="burger-line"></div>
          <div class="burger-line"></div>
          <div class="burger-line"></div>
          <div class="menu-container">
            <a href="onas.php">О нас</a>
            <a href="katalog.php">Каталог</a>
            <a href="#">Контакты</a>
          </div>
        </div>

        <script>
          const burgerMenu = document.querySelector('.burger-menu');
const menuContainer = document.querySelector('.menu-container');

burgerMenu.addEventListener('click', () => {
  burgerMenu.classList.toggle('open');
});
        </script>

        
      </div>

      <div class="bun_bun">
        <div class="bun_text">
          <h1>Насыщенный вкус, бесконечное удовольствие</h1>
        </div>
        <div class="bun_btn">
          <a href="katalog.php"><button>Перейти к выбору</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------О НАС--------------------------  -->

  <div class="onas">
    <div class="section">
      <div class="onas_grid">
        <div class="onas_img">
          <img src="media/Glavnay/окомпании.png" alt="">
        </div>

        <div class="onas_glav">
          <h1>О комапнии</h1>
          <div class="onas_opis">
            <p>Добро пожаловать в "ШАВЕРМА" - компанию, специализирующуюся на изготовлении вкусной шаурмы. Наша команда
              профессионалов с большой любовью и мастерством готовит уникальные шаурма-блюда, удовлетворяющие самые
              изысканные вкусы. Доверьтесь нам и насладитесь неповторимым вкусом шаурмы.</p>
          </div>
          <div class="onas_btn">
            <a href="onas.php">подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------ПОПУЛЯРНОЕ--------------------------  -->
  <div class="popular">
    <div class="section">
      <div class="popular_grid">
        <div class="popular_kart">
          <div class="kart_img">
            <img src="media/Glavnay/грибной_суп-пюре.png" alt="">
          </div>
          <div class="kart_grid">
            <div class="kart_naz">
              <p>Грибной суп-пюре</p>
            </div>
            <div class="kart_grm">
              <p class="grey">100г</p>
            </div>
          </div>
          <div class="kart_opis">
            <p class="grey">Вкуснейший грибной крем-суп из шампиньонов и картофеля, с нежной текстурой.
              Картофельно-грибной крем-суп - это вкусно, быстро и просто!</p>
          </div>
          <div class="kart_grid">
            <div class="kart_price">
              <p>от 97 ₽</p>
            </div>
            <div class="kart_btn">
              <button>В корзину</button>
            </div>
          </div>
        </div>

        <div class="popular_kart">
          <div class="kart_img">
            <img src="media/Glavnay/грибной_суп-пюре.png" alt="">
          </div>
          <div class="kart_grid">
            <div class="kart_naz">
              <p>Грибной суп-пюре</p>
            </div>
            <div class="kart_grm">
              <p class="grey">100г</p>
            </div>
          </div>
          <div class="kart_opis">
            <p class="grey">Вкуснейший грибной крем-суп из шампиньонов и картофеля, с нежной текстурой.
              Картофельно-грибной крем-суп - это вкусно, быстро и просто!</p>
          </div>
          <div class="kart_grid">
            <div class="kart_price">
              <p>от 97 ₽</p>
            </div>
            <div class="kart_btn">
              <button>В корзину</button>
            </div>
          </div>
        </div>

        <div class="popular_kart">
          <div class="kart_img">
            <img src="media/Glavnay/грибной_суп-пюре.png" alt="">
          </div>
          <div class="kart_grid">
            <div class="kart_naz">
              <p>Грибной суп-пюре</p>
            </div>
            <div class="kart_grm">
              <p class="grey">100г</p>
            </div>
          </div>
          <div class="kart_opis">
            <p class="grey">Вкуснейший грибной крем-суп из шампиньонов и картофеля, с нежной текстурой.
              Картофельно-грибной крем-суп - это вкусно, быстро и просто!</p>
          </div>
          <div class="kart_grid">
            <div class="kart_price">
              <p>от 97 ₽</p>
            </div>
            <div class="kart_btn">
              <button>В корзину</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------КОНТАКТЫ--------------------------  -->

  <div class="kont" id="contact">
    <div class="section">
      <h1>Контакты</h1>
      <div class="kont_grid">
        <div class="kont_kart">
          <div class="contacts">
            <div class="contact-info">
              <div class="itemq">
                <h3>Телефон:</h3>
                <p>+7 (900) 333-37-37</p>
              </div>
              <div class="itemq">
                <h3>Адрес:</h3>
                <p>г.Казань ул. Габдуллы Тукая, 64</p>
              </div>
              <div class="itemq">
                <h3>Время работы:</h3>
                <p>Круглосуточно</p>
              </div>
              <div class="itemq">
                <h3>Перезвоните мне:</h3>
                <div class="cont_btn">
                  <input type="tel" placeholder="номер">
                  <a href=""><img src="media/Glavnay/отправить.png" alt=""></a>
                </div>
              </div>
            </div>

            <div class="karta">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35865.59728193321!2d49.01606083073706!3d55.817547327086956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415952b59d0cd3db%3A0x20d34971cb4bbf9!2z0KjQsNGD0YDQvNCw!5e0!3m2!1sru!2sru!4v1715969442163!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------ФУТЕР--------------------------  -->

  <footer>
    <div class="section">
      <div class="foot_c">
        <div class="foot_img">
          <img src="media/Glavnay/тг.png" alt="">
          <img src="media/Glavnay/ютуб.png" alt="">
          <img src="media/Glavnay/вацап.png" alt="">
        </div>

        <div class="foot_text">
          <a href="onas.php">О нас</a>
          <a href="katalog.php">Каталог</a>
          <a href="">Контакты</a>
        </div>
      </div>

      <div class="foot_copy">
        <p>© FEDOTOV 2024 Все права защищены. Используя сайт, вы принимайте условия соглашений
          Информация на сайте не является публичной офертой.</p>
      </div>
    </div>
  </footer>

</body>

</html>