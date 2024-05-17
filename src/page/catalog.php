<?php
include "../components/header.php";
include "../components/footer.php";
$active = ['', 'active', '', '', ''];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Loylen | Каталог</title>
    <link rel="stylesheet" href="../style/catalog.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="content">
        <div class="d-flex">
            <span>Главная / </span><span class="text-uppercase">Избранные товары</span>
        </div>

        <div class="title">
            <span class="">
                КАТАЛОГ
            </span>
        </div>
        <div class="row">
            <div class="menu">
                <div class="d-flex flex-column row-gap-2">
                    <span class="text-uppercase">Все категории</span>
                    <span class="text-uppercase">Новинки</span>
                    <span class="text-uppercase">Распродажа</span>
                </div>
                <div class="d-flex flex-column row-gap-2 mt-4">
                    <div>
                        <input type="checkbox" /> ПЛАТЬЯ
                    </div>
                    <div>
                        <input type="checkbox" /> БОМБЕРЫ
                    </div>
                    <div>
                        <input type="checkbox" /> ФУТБОЛКИ, ТОПЫ
                    </div>
                </div>
                <div class="d-flex flex-column row-gap-2 mt-4">
                    <span class="fs-5 fw-medium mb-2 text-uppercase">цвет</span>
                    <div>
                        <input type="checkbox" /> БЕЛЫЙ
                    </div>
                    <div>
                        <input type="checkbox" /> ЧЕРНЫЙ
                    </div>
                    <div>
                        <input type="checkbox" /> КРАСНЫЙ
                    </div>
                </div>
                <div class="d-flex flex-column row-gap-2 mt-4">
                    <span class="fs-5 fw-medium mb-2 text-uppercase">РАЗМЕР</span>
                    <div>
                        <input type="checkbox" /> 38
                    </div>
                    <div>
                        <input type="checkbox" /> 40
                    </div>
                    <div>
                        <input type="checkbox" /> 42
                    </div>
                    <div>
                        <input type="checkbox" /> 46
                    </div>
                    <div>
                        <input type="checkbox" /> 48
                    </div>
                    <div>
                        <input type="checkbox" /> 50
                    </div>
                </div>
                <div class="d-flex flex-column row-gap-2 mt-4">
                    <span class="fs-5 fw-medium mb-2 text-uppercase">ЦЕНА</span>
                    <div class="price">
                        ОТ <input type="number" placeholder="999" /> ДО

                        <input type="number" placeholder="20000" /> руб.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mb-5">
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
                        <div class="img3 d-flex justify-content-between">
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
                </div>
                <div class="row mb-5">
                    <div class="col product">
                        <div class="img1 d-flex justify-content-between">
                            <div class="d-flex w-100 justify-content-between flex-column align-items-">
                                <div class="d-flex justify-content-between">
                                    <div class="point">
                                        <span class="text-uppercase text-white">хит продаж</span>
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
                                        <span class="text-uppercase text-white">хит продаж</span>
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
                                        <span class="text-uppercase text-white">хит продаж</span>
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
                                        <span class="text-uppercase text-white">хит продаж</span>
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
                                        <span class="text-uppercase text-white">хит продаж</span>
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
                                        <span class="text-uppercase text-white">хит продаж</span>
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
            </div>
        </div>
    </div>
    <?php myFooter(); ?>
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>