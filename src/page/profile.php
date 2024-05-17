<?php
include "../components/header.php";
include "../components/footer.php";
$active = ['', '', '', '', ''];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Loylen | Личный кабинет</title>
    <link rel="stylesheet" href="../style/profile.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="content">
        <div class="row">
            <div class="col menu d-flex flex-column">
                <div class="title text-uppercase"><span>Добро пожаловать, name</span></div>
                <div class="list d-flex flex-column">
                    <span class="text-uppercase">Мои данные</span>
                    <span>Мои адреса</span>
                    <span>Мои заказы (1)</span>
                    <span>Мои купоны (0)</span>
                    <span>Уведомления (3)</span>
                </div>
                <button class="btn__return text-uppercase w-50">вернуться на главную</button>
            </div>
            <div class="col form">
                <form class="d-flex flex-column">
                    <input placeholder="Имя" />
                    <input placeholder="Фамилия" />
                    <input placeholder="Номер телефона" />
                    <input placeholder="Электронная почта" />
                    <input placeholder="Текущий пароль" />
                    <input placeholder="Новый пароль" />
                    <input placeholder="Подтвердите пароль" />
                    <div>
                        <input type="checkbox" /> <span>Подписаться на рассылку</span>
                    </div>
                    <button class="save__btn text-uppercase">сохранить</button>
                </form>
            </div>
        </div>
    </div>
    <?php myFooter(); ?>
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>