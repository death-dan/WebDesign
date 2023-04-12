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
        <h1>Vamos Programar!!!!</h1>
    </main>
    <footer class="main_footer"></footer>
    
</body>
</html>