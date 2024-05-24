<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="body">
    <?php include('header.php');?>

        <div class="container">
            <div class="left-panel">
              <h2>Мы рады видеть тебя!</h2>
              <p>Войдите или зарегистрируйтесь чтобы ознакомиться с меню или заказать доставку</p>
            </div>
            <div class="right-panel mt-1px">
              <h3>Зарегистрироваться</h3>
              <form>
                <input type="text" placeholder="Имя"/>
                <input type="text" placeholder="Фамилия"/>
                <input type="text" placeholder="номер"/>
                <input type="password" placeholder="пароль" />
                <p>Уже зарегистрированы? <a href="signup.php">Войти</a></p>
                <button type="submit">войти</button>
              </form>
            </div>
        </div>

          <footer>
            <div class="section">
                <div class="foot_c">
                    <div class="foot_img">
                        <img src="media/Glavnay/тг.png" alt="">
                        <img src="media/Glavnay/ютуб.png" alt="">
                        <img src="media/Glavnay/вацап.png" alt="">
                    </div>
    
                    <div class="foot_text">
                        <a href="">О нас</a>
                        <a href="">Каталог</a>
                        <a href="">Контакты</a>
                    </div>
                </div>
    
                <div class="foot_copy">
                    <p>© FEDOTOV 2024 Все права защищены. Используя сайт, вы принимайте условия соглашений
                        Информация на сайте не является публичной офертой.</p>
                </div>
            </div>
        </footer>
    </div>

    
</body>

</html>