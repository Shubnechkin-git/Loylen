<?php
include "../components/header.php";
include "../components/footer.php";
$active = ['', '', '', 'active', ''];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Loylen | О Бренде</title>
    <link rel="stylesheet" href="../style/about.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="row block">
        <div class="col infa d-flex flex-column justify-content-center align-items-center">
            <div class="title">
                о бренде Loylen
            </div>
            <span>Бренд LOYLEN – одежда для тех, кто любит сочетать разные стили. С 2020 года мы создаем спортивные, классические и повседневные коллекции одежды для женщин. Это позволяет каждой женщине сочетать разные элементы гардероба и создать для себя уникальный образ на разные случаи жизни.</span>
            <span>LOYLEN любят за качество и натуральные ткани от турецких и итальянских фабрик. Вся одежда изготавливается преимущественно из хлопка, шерсти, льна, за которыми легко ухаживать</span>
            <span>У нас свое собственное производство – начиная от лекал, разработки образцов и пошива партии. Все модели создаются по современным трендам и предпочтениям наших клиентов. Одежда LOYLEN станет для вас воплощением всех ваших лучших образов</span>
        </div>
        <div class="col d-flex justify-content-center image">
            <img src="../assets/about/1.jpeg" class="img-fluid" />
        </div>
    </div>
    <div class="row block d-flex flex-row-reverse">
        <div class="col infa d-flex flex-column justify-content-start align-items-center">
            <div class="title">
                Для кого
            </div>
            <span>Одежда бренда LOYLEN за счет своей универсальности – отличный вариант для девушек разных возрастных категорий. Нас выбирают модницы от 20 до 50 лет, которые хотят создать стильный образ для любого случая жизни</span>
            <span>LOYLEN ценят за высокое качество одежды, удобство в носке и приемлемые цены. Благодаря собственному производству лекала получаются с идеальной посадкой и смотрятся идеально на разных типах фигуры. Одежду легко сочетать, можно комбинировать разные стили</span>
        </div>
        <div class="col d-flex justify-content-center image">
            <img src="../assets/about/1.jpeg" class="img-fluid" />
        </div>
    </div>
    <div class="row block">
        <div class="col infa d-flex flex-column justify-content-center align-items-center">
            <div class="title">
                техника Производства
            </div>
            <span>LOYLEN – это не только онлайн-магазин, но и собственная фабрика по производству одежды. Над каждой модной коллекцией трудятся дизайнер, модельер-конструктор, технолог, внимательный к деталям закройщик и портной</span>
            <span>Эта команда специалистов имеют большой опыт в легкой промышленности и создании одежды. Именно поэтому все модели получаются идеальными в посадке, утонченными и удобными в носке</span>
        </div>
        <div class="col d-flex justify-content-center image">
            <img src="../assets/about/1.jpeg" class="img-fluid" />
        </div>
    </div>
    <div class="instagram">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <span class="title_inst te">НАШ ИНСТАГРАМ</span>
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
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>