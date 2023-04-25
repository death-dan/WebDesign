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