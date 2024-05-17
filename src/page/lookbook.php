<?php
include "../components/header.php";
include "../components/footer.php";
$active = ['', '', 'active', '', ''];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loylen | Lookbook</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/lookbook.css">
</head>

<body>
    <?php echo myHeader($active); ?>
    <div class="content">
        <div class="row ">
            <div class="col lookbook">
                <div class="d-flex flex-column one">
                    <span>ОТ LOYLEN</span>
                    <span class="title">LOOKBOOK</span>
                    <span>Неповторимые образы, подобранные специально для вас</span>
                    <img src="../assets/lookbook/2.jpeg" class="img-fluid" />
                </div>
            </div>
            <div class="col">
                <img src="../assets/lookbook/1.jpeg" class="img-fluid" />
                <span>Комбинезон 8000 ₽</span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex flex-column tree">
                <img src="../assets/lookbook/3.jpeg" class="img-fluid" />
                <span>Классическая рубашка 3000 ₽<br />
                    Брюки с ремнем 3000 ₽</span>
            </div>
        </div>
        <div class="row justify-content-between ">
            <div class="col d-flex flex-column four"><img src="../assets/lookbook/4.jpeg" /><span>Комбинезон 8000 ₽</span></div>
            <div class="col d-flex flex-column five"><img src="../assets/lookbook/5.jpeg" /><span>Классическая рубашка 3000 ₽<br />
                    Брюки с ремнем 3000 ₽</span></div>
        </div>
    </div>
    <?php myFooter(); ?>
    <script src=" ../../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>