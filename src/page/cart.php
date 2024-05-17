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
    <title>Loylen | Корзина</title>
    <link rel="stylesheet" href="../style/cart.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="content">
        <div class="cart__title text-center">
            <span class="text-uppercase">корзина</span>
        </div>
        <div class="row marg">
            <div class="col">
                <div class="row">
                    <div class="col product d-flex">
                        <div class="col d-flex"><img src="../assets/cart/1.jpeg" class="img-fluid me-3" />
                            <div class="col d-felx text-uppercase d-flex flex-column justify-content-between">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center column-gap-2">
                                        <span class="product__title">Платье</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                                            <path d="M2.01407 8.66656C0.211282 6.22207 0.81221 2.55535 3.81685 1.33311C6.82149 0.110872 8.62428 2.55535 9.2252 3.77759C9.82613 2.55535 12.2298 0.110872 15.2345 1.33311C18.2391 2.55535 18.2391 6.22207 16.4363 8.66656C14.6336 11.111 9.2252 16 9.2252 16C9.2252 16 3.81685 11.111 2.01407 8.66656Z" stroke="#474A51" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M17 17L1 1M1 17L17 1L1 17Z" stroke="#474A51" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column">
                                    <span>Размер: 44</span>
                                    <span>Количество: 1</span>
                                </div>
                                <div>
                                    <span>Артикул: 12345685962</span>
                                </div>
                                <div>
                                    <span>5000 ₽</span>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col product d-flex">
                        <div class="col d-flex"><img src="../assets/cart/1.jpeg" class="img-fluid me-3" />
                            <div class="col d-felx text-uppercase d-flex flex-column justify-content-between">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center column-gap-2">
                                        <span class="product__title">Платье</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                                            <path d="M2.01407 8.66656C0.211282 6.22207 0.81221 2.55535 3.81685 1.33311C6.82149 0.110872 8.62428 2.55535 9.2252 3.77759C9.82613 2.55535 12.2298 0.110872 15.2345 1.33311C18.2391 2.55535 18.2391 6.22207 16.4363 8.66656C14.6336 11.111 9.2252 16 9.2252 16C9.2252 16 3.81685 11.111 2.01407 8.66656Z" stroke="#474A51" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M17 17L1 1M1 17L17 1L1 17Z" stroke="#474A51" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column">
                                    <span>Размер: 44</span>
                                    <span>Количество: 1</span>
                                </div>
                                <div>
                                    <span>Артикул: 12345685962</span>
                                </div>
                                <div>
                                    <span>5000 ₽</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column">
                <span class="text-uppercase">Промокод</span>
                <form class="d-flex ">
                    <input placeholder="Промокод" class="w-100"/>
                    <button class="text-uppercase enter__btn">применить</button>
                </form>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Применен промокод СКИДКА 10% НА ВСЕ</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M15 15L1 1M1 15L15 1L1 15Z" stroke="#474A51" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="list__price">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-uppercase">Сумма заказа</span>
                        <span class="text-uppercase">21000 ₽</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-uppercase">Скидка</span>
                        <span class="text-uppercase">0 ₽</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-uppercase">итого</span>
                        <span class="text-uppercase">21000 ₽ ₽</span>
                    </div>
                </div>
                <button class="text-uppercase submit__btm">
                    оформить заказ
                </button>
                <span>Нажимая на кнопку, вы подтверждаете, что ознакомлены и согласны с офертой и политикой конфиденциальности</span>
            </div>
        </div>
    </div>
    <?php myFooter(); ?>
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>