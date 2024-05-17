<?php
include "../components/header.php";
include "../components/footer.php";
$active = ['', '', '', '', 'active'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Loylen | Избранное</title>
    <link rel="stylesheet" href="../style/favorite.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="content">
        <div class="d-flex">
            <span>Главная / </span><span class="text-uppercase">Избранные товары</span>
        </div>

        <div class="title">
            <span class="">
                ЛЮБИМЫЕ ТОВАРЫ
            </span>
        </div>
        <div class="row gap-4 cart">
            <div class="col">
                <div class="img1 d-flex flex-column align-content-end justify-content-between align-items-end">
                    <img class="svg" src="../assets/favorite/close.png" />
                    <div class="sizes d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button>40</button>
                            <button>42</button>
                            <button>44</button>
                            <button>46</button>
                            <button>48</button>
                        </div>
                        <button class="cart__btn">Добавить в корзину</button>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-content-center">
                    <span class="title_prod fs-4 fw-bold mb-2">Платье</span>
                    <span>9 000 ₽</span>
                </div>
            </div>
            <div class="col">
                <div class="img2 d-flex flex-column align-content-end justify-content-between align-items-end">
                    <img class="svg" src="../assets/favorite/close.png" />
                    <div class="sizes d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button>40</button>
                            <button>42</button>
                            <button>44</button>
                            <button>46</button>
                            <button>48</button>
                        </div>
                        <button class="cart__btn">Добавить в корзину</button>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-content-center">
                    <span class="title_prod fs-4 fw-bold mb-2">Платье</span>
                    <span>7 000 ₽</span>
                </div>
            </div>
            <div class="col">
                <div class="img3 d-flex flex-column align-content-end justify-content-between align-items-end">
                    <img class="svg" src="../assets/favorite/close.png" />
                    <div class="sizes d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button>40</button>
                            <button>42</button>
                            <button>44</button>
                            <button>46</button>
                            <button>48</button>
                        </div>
                        <button class="cart__btn">Добавить в корзину</button>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-content-center">
                    <span class="title_prod fs-4 fw-bold mb-2">Платье</span>
                    <span>7 000 ₽</span>
                </div>
            </div>
            <div class="col">
                <div class="img4 d-flex flex-column align-content-end justify-content-between align-items-end">
                    <img class="svg" src="../assets/favorite/close.png" />
                    <div class="sizes d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button>40</button>
                            <button>42</button>
                            <button>44</button>
                            <button>46</button>
                            <button>48</button>
                        </div>
                        <button class="cart__btn">Добавить в корзину</button>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-content-center">
                    <span class="title_prod fs-4 fw-bold mb-2">Платье</span>
                    <span>9 000 ₽</span>
                </div>
            </div>
        </div>
    </div>
    <?php myFooter(); ?>
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>