<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WdpShoes | Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Styles/Icons.css">
    <link href="https://file.myfontastic.com/d3XTWRRNXU2GYaFhhAUY4W/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Styles/Boot.css">
    <link rel="stylesheet" href="Themes/WdpShoes/Style.css">
    <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png">

</head>
<body>
    <header class="main_header">
        <div class="container">
            <div class="main_header_content">
                <a href="#" title="WdpShoes | Home">
                    <img src="Themes/WdpShoes/Images/wdpshoes_logo_white.png" alt="" title="">
                </a>
                <div class="main_header_search">
                    <form action="" method="post" class="radius">
                        <input type="text" name="" placeholder="Pesquisar na WdpShoes">
                        <button class="icon-search icon-notext transition"></button>
                    </form>
                </div>
                <div class="main_header_menu">
                    <a href="#" title="" class="icon-cart icon-notext transition"><span>3</span></a>
                    <div class="main_header_menu_user">
                        <a href="" title="" class="icon-user radius transition">Minha Conta</a>
                        <div class="radius nav">
                            <a href="#" title="">Meus pedidos</a>
                            <a href="#" title="">Meus dados</a>
                            <a href="#" title="">Meus endesreços</a>
                            <a href="#" title="">Sair</a>     
                        </div>
                    </div> 
                </div>
            </div>
            <nav class="main_header_nav">
                <ul class="menu">
                    <?php 
                        for($i = 1; $i < 5; $i++) {
                    ?>
                            <li>
                                Departamento <?= $i;?>
                                <ul class="sub_menu">
                                <?php 
                                    for($ii = 1; $ii < 5; $ii++) {
                                ?>
                                        <li><a href="#" title="">Categoria <?= "{$i}/{$ii}";?></a>
                                <?php        
                                    }
                                ?>
                                </ul>
                            </li>
                    <?php        
                        }
                    ?>
                </ul>
            </nav>    
        </div>
    </header>

    <main class="main_content">
        <section class="pdt_gallery">
            <div class="container">
                <header class="pdt_gallery_header">
                    <h1>Ofertas da Semana: </h1>
                </header>
            </div>
        </section>
    </main>

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
                                <a href="#" title="">Link de Rodapé <?= "{$m}/{$mm}";?></a>
                            <?php
                                }
                            ?>
                        </nav>
                <?php
                    }
                ?>

                <nav class="flex-4">
                    <h4>Pagamento Seguro:</h4>
                    <ul class="footer_optin_nav_pays flex">
                        <li class="flex-4"><img src="Assets/Cards/mastercard.png" alt="" title=""></li>
                        <li class="flex-4"><img src="Assets/Cards/visa.png" alt="" title=""></li>
                        <li class="flex-4"><img src="Assets/Cards/amex.png" alt="" title=""></li>
                        <li class="flex-4"><img src="Assets/Cards/aura.png" alt="" title=""></li>
                        <li class="flex-4"><img src="Assets/Cards/dinners.png" alt="" title=""></li>
                        <li class="flex-4"><img src="Assets/Cards/discover.png" alt="" title=""></li>
                    </ul>   
                </nav>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container flex">
                <div class="footer_bottom_copy">
                    <img src="Themes/WdpShoes/Images/wdpshoes_logo_black.png" alt="WdpShoes" title="WdpShoes">
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
</body>
</html>