<link rel="stylesheet" href="../style/header.css">
<?php
function myHeader($active)
{
    $htmlContent = '
        <header>
            <div class="message w-100 text-center"><span>Бесплатная доставка при заказе от 10 000 руб по Москве и Московской области</span></div>
            <div class="row w-100 navigation d-flex justify-content-between">
                <div class="left col d-flex text-uppercase">
                    <div class="row d-flex w-100">
                     <span class="' . $active[0] . ' col"><a href="main.php" class="text-decoration-none">Главная</a></span>
                        <span class="' . $active[1] . ' col"><a href="catalog.php" class="text-decoration-none">Каталог</a></span>
                       <span class="' . $active[2] . ' col"><a href="lookbook.php" class="text-decoration-none">lookbook</a></span>
                        <span class="' . $active[3] . ' col"><a href="about.php" class="text-decoration-none">О бренде</a></span>
                        <span class="' . $active[4] . ' col"><a href="favorite.php" class="text-decoration-none">избранное</a></span>
                    </div>
                </div>
                <div class="center justify-content-center text-center col"><a href="main.php" class="text-decoration-none"><img src="../assets/header/Mediamodifier-Design-Template (1).png" class="img-fluid"/></a></div>
                <div class="right col justify-content-end  d-flex">
                    <a href="profile.php" class="text-decoration-none "><img src="../assets/header/лк.png"/></a>
                    <a href="cart.php" class="text-decoration-none"><img src="../assets/header/корзина.png"/></a>
                </div>
            </div>
        </header>
';
    return $htmlContent;
}
