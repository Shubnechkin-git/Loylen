    <?php
    include "../components/header.php";
    include "../components/footer.php";

    $active = ['active', '', '', '', ''];

    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loylen | Главная страница</title>
        <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style/main.css">
    </head>


    <body>
        <?php echo myHeader($active); ?>
        <div class="jumbo d-flex justify-content-center align-items-center">
            <div class="d-flex flex-column">
                <span>ОСЕНЬ 2021</span>
                <button><a href="catalog.php" class="text-decoration-none text-dark">В КАТАЛОГ</a></button>
            </div>
        </div>
        <div class="category">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center novelty">
                    <div class="d-flex flex-column">
                        <span>НОВИНКИ</span>
                        <button><a href="catalog.php" class="text-decoration-none text-white">СМОТРЕТЬ</a></button>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center  sales">
                    <div class="d-flex flex-column">
                        <span>РАСПРОДАЖА</span>
                        <button><a href="catalog.php" class="text-decoration-none text-white">СМОТРЕТЬ</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog">
            <span class="title d-flex justify-content-center"><span>КАТАЛОГ</span></span>
            <div class="row">
                <div class="col product">
                    <div class="img1 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point bg-danger">
                                    <span class="text-uppercase text-white">новинки</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
                <div class="col product">
                    <div class="img2 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point">
                                    <span class="text-uppercase">хит продаж</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
                <div class="col product">
                    <div class="img3 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point">
                                    <span class="text-uppercase">хит продаж</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col product">
                    <div class="img1 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point">
                                    <span class="text-uppercase">хит продаж</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
                <div class="col product">
                    <div class="img2 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point">
                                    <span class="text-uppercase">хит продаж</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
                <div class="col product">
                    <div class="img3 d-flex justify-content-between">
                        <div class="d-flex w-100 justify-content-between flex-column align-items-">
                            <div class="d-flex justify-content-between">
                                <div class="point">
                                    <span class="text-uppercase">хит продаж</span>
                                </div>
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <path d="M2.21688 10.1999C0.0535382 7.26649 0.774652 2.86642 4.38022 1.39973C7.98579 -0.0669538 10.1491 2.86642 10.8702 4.33311C11.5914 2.86642 14.4758 -0.0669538 18.0814 1.39973C21.687 2.86642 21.687 7.26649 19.5236 10.1999C17.3603 13.1332 10.8702 19 10.8702 19C10.8702 19 4.38022 13.1332 2.21688 10.1999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
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
                    </div>
                    <div class="description text-center d-flex flex-column">
                        <span class="title__product">Бомбер</span>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
            </div>
            <div class="d-flex show__all justify-content-center">
                <button class="text-uppercase">посмотреть все</button>
            </div>
        </div>
        <div class="lookbook">
            <div class="row">
                <div class="col">
                    <img src="../assets/main/лукбук.png" class="img-fluid" />
                </div>
                <div class="col body d-flex justify-content-center align-content-center flex-column">
                    <span class="title__look">LOOKBOOK</span>
                    <p>При создании коллекций мы учитываем, чтобы все изделия сочетались. Это позволяет подобрать полный образ на все случаи жизни</p>
                    <span>Скидка 10% при покупке полного образа</span>
                    <div class="d-flex">
                        <button class="text-uppercase"><a href="lookbook.php" class="text-decoration-none text-dark">Смотреть</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="instagram">
            <div class="d-flex justify-content-center flex-column">
                <span class="title_inst">НАШ ИНСТАГРАМ</span>
                <span class="inst text-uppercase">@loylen_brand</span>
            </div>
            <div class="photo">
                <div class="row w-100">
                    <div class="col img7 d-flex justify-content-center align-items-center">
                        <div class="blur w-100 h-100 d-flex justify-content-center align-items-center">
                            <span class="text-uppercase">Перейти в инстаграм</span>
                        </div>
                    </div>
                    <div class="col img8 d-flex justify-content-center align-items-center">
                        <div class="blur w-100 h-100 d-flex justify-content-center align-items-center">
                            <span class="text-uppercase">Перейти в инстаграм</span>
                        </div>
                    </div>
                    <div class="col img9 d-flex justify-content-center align-items-center">
                        <div class="blur w-100 h-100 d-flex justify-content-center align-items-center">
                            <span class="text-uppercase">Перейти в инстаграм</span>
                        </div>
                    </div>
                    <div class="col img10 d-flex justify-content-center align-items-center">
                        <div class="blur w-100 h-100 d-flex justify-content-center align-items-center">
                            <span class="text-uppercase">Перейти в инстаграм</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php myFooter(); ?>
        <script src="../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    </body>

    </html>