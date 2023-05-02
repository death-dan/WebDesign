<header class="main_header">
    <div class="container">
        <div class="main_header_content">
            <div class="logo">
                <a href="<?= $configBase ;?>" title="WdpShoes | Home">
                    <img src="<?= $configThemeLink ;?>/Images/wdpshoes_logo_white.png" alt="" title="">
                </a>
            </div> 
            <div class="main_header_search">
                <form action="" method="post" class="radius">
                    <input type="text" name="s" placeholder="Pesquisar na WdpShoes">
                    <button class="icon-search icon-notext transition"></button>
                </form>
            </div>
            <div class="main_header_menu">
                <a href="<?= $configBase;?>/checkout" title="" class="icon-cart icon-notext transition"><span>3</span></a>
                <div class="main_header_menu_user">
                    <a href="#" title="" class="icon-user radius transition jtheme_login">Login</a>
                    <div class="radius nav">
                        <a href="<?= $configBase ;?>/conta" title="">Meus pedidos</a>
                        <a href="<?= $configBase ;?>/conta/cadastro" title="">Meus dados</a>
                        <a href="<?= $configBase ;?>/conta/enderecos" title="">Meus endesreços</a>
                        <a href="<?= $configBase ;?>/conta/sair" title="">Sair</a>     
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
                                    <li><a href="<?= $configBase ;?>/categoria" title="">Categoria <?= "{$i}/{$ii}";?></a>
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

<div class="theme_login">
    <div class="theme_login_box radius">
        <header>
            <h1>Fazer Login</h1>
            <p>Informe seu nome e e-mail para fazer login e acessar seus pedidos.</p>
        </header>
        <form>
            <input class="radius" type="email" placeholder="E-mail:">
            <input class="radius" type="password" placeholder="Senha:">
            <a href="<?= $configBase; ?>/conta" class="btn radius transition icon-success" title="Minha Conta">Fazer Login</a>
        </form>
        <a href="#" title="Recuperar Senha" class="theme_login_box_recover transition icon-alert">Esqueci minha senha</a>
    </div>
</div>