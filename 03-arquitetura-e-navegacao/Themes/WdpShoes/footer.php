<footer class="main_footer">
    <div class="container">
        <article class="footer_optin">
            <header>
                <h3>Quer 20% de desconto?</h3>
                <p>Informe seu melhor e-mail logo abaixo e receba um cupom com 20% de desconto para primeira compra!</p>
            </header>
            <form action="#">
                <input class="radius" type="email" name="email" placeholder="Informe seu e-mamil">
                <button class="btn radius transition icon-mail">Quero meu desconto!</button>
            </form>
        </article>
        <div class="footer_optin_nav flex">
            <?php
                for($m = 1; $m < 4; $m++) {
            ?>
                    <nav class="flex-4">
                        <h4>Nome menu <?= $m;?></h4>
                        <?php
                            for($mm = 1; $mm < 6; $mm++) {
                        ?>
                            <a href="<?= $configBase ;?>" title="">Link de Rodapé <?= "{$m}/{$mm}";?></a>
                        <?php
                            }
                        ?>
                    </nav>
            <?php
                }
            ?>

            <nav class="pays flex-4">
                <h4>Pagamento Seguro:</h4>
                <ul class="footer_optin_nav_pays flex">
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/mastercard.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/visa.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/amex.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/aura.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/dinners.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase ;?>/Assets/Cards/discover.png" alt="" title=""></li>
                </ul>   
            </nav>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container flex">
            <div class="footer_bottom_copy">
                <img src="<?= $configThemeLink ;?>/Images/wdpshoes_logo_black.png" alt="WdpShoes" title="WdpShoes">
                <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="footer_bottom_social">
                <a href="#" title="" class="icon-facebook icon-notext transition"></a>
                <a href="#" title="" class="icon-instagram icon-notext transition"></a>
                <a href="#" title="" class="icon-youtube icon-notext transition"></a>
            </div>
        </div>
    </div>
</footer> 