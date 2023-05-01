<?php 
    $search = (!empty($configUrl[1]) ? trim(strip_tags($configUrl[1])) : null);
    if (empty($search)) {
        header("Lacation: {$configBase}");
        exit;
    }
?>
<main class="main_content">
    <div class="container main_category">
        <section class="category_products">
            <header class="category_products_header">
                <div>
                    <h1>Sua Pesquisa ...</h1>
                    <p>Encontramos X resultados em <b><?= $search; ?></b></p>
                </div>
                
                <form action="#">
                    <p>Ordernar por:</p>
                    <select>
                        <option>Mais vendidos</option>
                        <option>Ofertas especias</option>
                        <option>lançamentos</option>
                        <option>Menor preço</option>
                        <option>Maior preço</option>
                    </select>
                </form>
            </header>

            <div class="category_products_content">
                <?php
                    for ($pdt = 1; $pdt < 16; $pdt++) {
                        require "{$configThemePath}/Templates/products.php";
                    }
                ?>
            </div>

            <nav class="category_products_paginator">
                <a href="#" class="radius transition active">1</a>
                <a href="#" class="radius transition">2</a>
                <a href="#" class="radius transition">3</a>
                <a href="#" class="radius transition">4</a>
                <a href="#" class="radius transition">5</a>
            </nav>
        </section>

        <aside class="category_sidebar">
            <h2>Filtrar Resultados</h2>
            <?php 
                for ($i = 1; $i < 4; $i++) {
            ?>
                    <nav class="category_sidebar_widget">
                        <h3>Menu de Filtro:</h3>
                        <a href="#" title="" class="radius transition">Filtro (tamanho/cor/etc)</a>
                        <a href="#" title="" class="radius transition">Filtro (tamanho/cor/etc)</a>
                        <a href="#" title="" class="radius transition active">Filtro (tamanho/cor/etc)</a>
                        <a href="#" title="" class="radius transition">Filtro (tamanho/cor/etc)</a>
                        <a href="#" title="" class="radius transition">Filtro (tamanho/cor/etc)</a>
                        <a href="#" title="" class="radius transition">Filtro (tamanho/cor/etc)</a>
                    </nav>
            <?php 
                }
            ?>
        </aside>
    </div>
</main>