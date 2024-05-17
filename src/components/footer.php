<link rel="stylesheet" href="../style/footer.css">
<?php
function myFooter()
{
    $htmlContent = <<<HTML
        <footer class="d-flex justify-content-between align-items-center">
           <div class="row w-100">
            <div class="col d-flex flex-column justify-content-center">
                <span class="number">+ 7 964 705 94 64</span>
                <span>info@loylen.com</span>
        </div>
            <div class="col d-flex justify-content-center"><a href="main.php" class="text-decoration-none"><img src="../assets/footer/логотип осн.png" /></a></div>
            <div class="col d-flex flex-column justify-content-center align-items-end"><span>2021 Интернет-магазин LOYLEN<br/> Все права защищены<br/> Разработка дизайна</span></div>
           </div>
        </footer>
    HTML;
    echo $htmlContent;
}
