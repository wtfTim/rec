<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="admin_block_grid">
        <div class="left_block">
            <div class="lblock_grid">
                <div class="lblock_img">
                    <img src="media/profile/челик.png" alt="">
                </div>
                <div class="lblock_name">
                    <h1>Имя Фамилия</h1>
                    <p>+7 (900) 000-00-00</p>
                </div>
            </div>

            <div class="lblock_list">
                <div class="list_block">
                    <div class="list_img">
                        <img src="media/icon/пользователь.png" alt="">
                    </div>
                    <div class="list_text">
                        <a href="admin_users.php">
                            <p>Пользователи</p>
                        </a>
                    </div>
                </div>
                <div class="list_block">

                    <div class="list_img">
                        <img src="media/icon/товары.png" alt="">
                    </div>
                    <div class="list_text1">
                        <a href="admin_tovar.php">
                            <p class="line">Товары</p>
                        </a>
                    </div>
                </div>
                <div class="list_block">

                    <div class="list_img">
                        <img src="media/icon/категории.png" alt="">
                    </div>
                    <div class="list_text">
                        <a href="admin_kategory.php">
                            <p>Категории</p>
                        </a>
                    </div>
                </div>

            
            </div>

        </div>

        

        <div class="right_block">
        <div class="mobile-menu-toggle">
                    <div class="mobile-menu-line"> </div>
                    <div class="mobile-menu-line"> </div>
                    <div class="mobile-menu-line"> </div>
                    <div class="mobile-menu-container">
                        <a href="admin_users.php">Пользователи</a>
                        <a href="admin_tovar.php">Товары</a>
                        <a href="admin_kategory.php">Категории</a>
                    </div>
                </div>
                <script>
                    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
const mobileMenuContainer = document.querySelector('.mobile-menu-container');

mobileMenuToggle.addEventListener('click', () => {
  mobileMenuToggle.classList.toggle('open');
});
                </script>
            
            <div class="rblock_glav">
                <h1>Панель администратора</h1>
                <p>Здравствуйте, Админ!</p>
            </div>
            

            <div class="rblock_tov">
                <h1>Товары</h1>
                <a href="add.php">+</a>
            </div>
            <div class="adap1">
                <div class="item">
                    <p>id</p>
                    <p>Название</p>
                    <p>Описание</p>
                    <p>Цена</p>
                    <p>Категория</p>
                </div>

                <div class="item1">
                    <p>id</p>
                    <p class="w-10">Грибной крем-суп</p>
                    <p class="w-10">грибы, вода...</p>
                    <p class="w-11">87 ₽</p>
                    <p>Шаурма</p>
                    <a href="add.php" class="admin_btn_del">Изменить</a>
                    <a href="delete.php" class="admin_btn_del">Удалить</a>
                    <div class="item_del">
                    <a href="add.php"><img src="media/icon/добавить.png" alt=""></a>
                    </div>
                    <div class="item_del">
                    <a href="delete.php"><img src="media/icon/удалить.png" alt=""></a>
                    </div>
                </div>
                <div class="item1">
                    <p>id</p>
                    <p class="w-10">Грибной крем-суп</p>
                    <p class="w-10">грибы, вода...</p>
                    <p class="w-11">87 ₽</p>
                    <p>Шаурма</p>
                    <a href="add.php" class="admin_btn_del">Изменить</a>
                    <a href="delete.php" class="admin_btn_del">Удалить</a>
                    <div class="item_del">
                    <a href="add.php"><img src="media/icon/добавить.png" alt=""></a>
                    </div>
                    <div class="item_del">
                    <a href="delete.php"><img src="media/icon/удалить.png" alt=""></a>
                    </div>
                </div>
                <div class="item1">
                    <p>id</p>
                    <p class="w-10">Грибной крем-суп</p>
                    <p class="w-10">грибы, вода...</p>
                    <p class="w-11">87 ₽</p>
                    <p>Шаурма</p>
                    <a href="add.php" class="admin_btn_del">Изменить</a>
                    <a href="delete.php" class="admin_btn_del">Удалить</a>
                    <div class="item_del">
                    <a href="add.php"><img src="media/icon/добавить.png" alt=""></a>
                    </div>
                    <div class="item_del">
                    <a href="delete.php"><img src="media/icon/удалить.png" alt=""></a>
                    </div>
                </div>

                <div class="list p-100">
                    <div class="list_grid">
                        <a href=""><img src="media/katalog/стр_лево.png" alt=""></a>
                        <div class="num_grid">
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">...</a>
                            <a href="">15</a>
                        </div>
                        <a href=""><img src="media/katalog/стр_право.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
</body>
</div>

</html>