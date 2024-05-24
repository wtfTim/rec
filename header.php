<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="body">
    <header>
            <div class="section">
                <div class="head_grid">
                    <div class="logo">
                        <a href="index.php"><img src="media/Glavnay/лого.png" alt="" /></a>
                    </div>

                    <div class="head_text">
                        <a href="onas.php">О нас</a>
                        <a href="katalog.php">Каталог</a>
                        <a href="index.php#contact">Контакты</a>
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
                          <a href="index">Контакты</a>
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
            </div>
        </header>
</boby>