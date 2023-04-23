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
                <div class="logo">
                    <a href="#" title="WdpShoes | Home">
                        <img src="Themes/WdpShoes/Images/wdpshoes_logo_white.png" alt="" title="">
                    </a>
                </div> 
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
        <div class="main_slide j_slide">
            <?php 
                for ($i = 1; $i < 4; $i++) {
            ?>
                    <a href="#" title="" class="j_slide_item"><img src="Uploads/featured-<?= str_pad($i, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
            <?php
                }
            ?>
            <div class="j_slide_nav"></div>
        </div>

        <section class="pdt_gallery">
            <div class="container">
                <header class="main_content_header">
                    <h1>Ofertas da Semana: </h1>
                </header>

                <div class="flex">
                    <div class="pdt_gallery_list pdt_gallery_featured">
                        <article class="pdt_gallery_item flex-2">
                            <a href="#" title=""><img src="Uploads/products/06.jpg" alt="" title=""></a>
                            <header class="pdt_gallery_item_desc">
                                <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                <div class="pdt_gallery_item_desc_price">
                                    <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                </div>
                                <p>2x R$ 29,95</p>
                            </header>
                        </article>
                    </div>

                    <div class="pdt_gallery_list flex">
                        <?php 
                            $pdt = 0;
                            for($pdt = 1; $pdt < 5; $pdt++) {
                        ?>
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                        <?php 
                            }
                        ?>
                    </div>
                </div>    

                <div class="pdt_gallery_normalize">
                    <img src="Uploads/featured-01.jpg" alt="" class="pdt_gallery_item pdt_banner">
                </div>

                <div class="pdt_gallery_normalize flex">
                        <?php 
                            $pdt = 0;
                            for($pdt = 5; $pdt < 9; $pdt++) {
                        ?>
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                        <?php 
                            }
                        ?>
                    </div>
            </div>
        </section>

        <section class="pdt_gallery pdt_select">
            <div class="container">
                <header class="pdt_select_header">
                    <h1>
                        <span class="j_tabs_nav transition radius">Eles</span>
                        <span class="j_tabs_nav transition radius">Elas</span>
                    </h1>
                </header>

                <div class="j_tabs">
                    <div class="j_tabs_item">
                        <div class="flex">
                            <div class="pdt_gallery_list pdt_gallery_featured">
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img src="Uploads/products/15.jpg" alt="" title=""></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                            </div>

                            <div class="pdt_gallery_list flex">
                                <?php 
                                    $pdt = 0;
                                    for($pdt = 11; $pdt < 15; $pdt++) {
                                ?>
                                        <article class="pdt_gallery_item flex-2">
                                            <a href="#" title=""><img src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                            <header class="pdt_gallery_item_desc">
                                                <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                                <div class="pdt_gallery_item_desc_price">
                                                    <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                </div>
                                                <p>2x R$ 29,95</p>
                                            </header>
                                        </article>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div> 
                    </div>

                    <div class="j_tabs_item">
                        <div class="flex">
                            <div class="pdt_gallery_list pdt_gallery_featured">
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img src="Uploads/products/09.jpg" alt="" title=""></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                            </div>

                            <div class="pdt_gallery_list flex">
                                <?php 
                                    $pdt = 0;
                                    for($pdt = 5; $pdt < 9; $pdt++) {
                                ?>
                                        <article class="pdt_gallery_item flex-2">
                                            <a href="#" title=""><img src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                            <header class="pdt_gallery_item_desc">
                                                <h2 class="pdt_gallery_item_desc_title"><a href="#" class="transition" title="Calça Moletom Confort Mama Latina">Calça Moletom Confort Mama Latina</a></h2>
                                                <div class="pdt_gallery_item_desc_price">
                                                    <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                </div>
                                                <p>2x R$ 29,95</p>
                                            </header>
                                        </article>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <section class="blog_gallery">
            <div class="container">
                <div class="main_content_header">
                    <h1>Blog</h1>
                </div>

                <div class="flex">
                    <?php
                        for ($b = 1; $b < 7; $b++) {
                    ?>
                            <article class="blog_gallery_item transition flex-3">
                                <a href="#" title="">
                                    <img src="Uploads/blog/<?= str_pad($b, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="">
                                </a>

                                <header>
                                    <h2><a class="transition" href="#" title="">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</a></h2>
                                </header>
                            </article>
                    <?php
                        }
                    ?>
                </div>
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

                <nav class="pays flex-4">
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
    
    <script src="Assets/Js/jquery.js"></script>
    <script src="Assets/Js/script.js"></script>
</body>
</html>