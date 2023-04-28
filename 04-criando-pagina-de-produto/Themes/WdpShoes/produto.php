<main class="main_content">
    <div class="container">
        <article class="main_product">
            <div class="product_gallery">
                <ul class="product_gallery_list">
                    <?php
                        for ($img = 1; $img < 5; $img++) {
                            $active = ($img == 1 ? "active" : "");
                    ?>
                            <li class="radius transition <?= $active; ?> j_gallery_item">
                                <img src="<?= $configBase; ?>/Uploads/products/16-<?= $img; ?>.jpg" alt="">
                            </li>
                    <?php
                        }
                    ?>
                </ul>
                <div class="product_gallery_cover">
                    <img src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" class="radius j_gallery_home">
                </div>
            </div>
            <div class="product_checkout">
                <p class="product_checkout_stars"><?= str_repeat("<span class='icon-star-e icon-notext'></span>", 5)?></p>
                <h1 class="product_checkout_title">Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h1>
                <p class="product_checkout_headline">Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! Trazendo um design moderno e uma estampa exclusiva... <b class="j_anchor" data-anchor=".product_description">ver mais</b></p>
                <p class="product_checkout_price">R$ 59,00 <span>R$ 79,00</span></p>
                <p class="product_checkout_economy">Economia de R$ 20,00 (25%)</p>
                <p class="product_checkout_parcels">Em até 4x de 14,75</p>

                <form class="product_checkout_cart">
                    <h2>Selecione o <b>tamanho</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1" />
                            <span class="icon-minus icon-notext"></span>
                        </div>
                        <button class="btn icon-cart radius transition">COMPRAR</button>
                    </div>
                </form>

                <aside class="product_checkout_related">
                    <h2>Outras <b>cores</b></h2>
                    <div>
                        <a href="#" class="radius transition active"><img src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title=""></a>
                        <a href="#" class="radius transition"><img src="<?= $configBase; ?>/Uploads/products/17-1.jpg" alt="" title=""></a>
                    </div>
                </aside>
            </div>
        </article>
    </div>

    <section class="product_related">
        <div class="container">
            <header class="main_content_header">
                <h2 class="titles">Produtos relacionados</h2>
            </header>

            <div class="pdt_gallery pdt_gallery_normalize flex">
                <?php 
                    for ($pdt = 5; $pdt < 13; $pdt++) {
                        require "{$configThemePath}/Templates/products.php";
                    }
                ?>                
            </div>
        </div>
    </section>

    <article class="product_description">
        <div class="container">
            <header class="product_description_header">
                <span class="description_header_tag">DESCRIÇÃO</span>
                <h4>Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h4>
                <p>
                    Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! Trazendo um design moderno e uma estampa exclusiva,
                    este Top Esportivo da Gonew entra em cena para oferecer ótima sustentação ao busto durante seus treinos e corridas. 
                    Ele é confeccionado em tecido elástico, e conta com detalhe em tule na parte da frente, que deixa o visual da peça 
                    sensual e muito mais respirável. Não perca tempo e compre já o seu Top Gonew Mármore Detalhe Tule Média Sustentação!
                </p>
                <form class="product_checkout_cart">
                    <h2>Selecione o <b>tamanho</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1" />
                            <span class="icon-minus icon-notext"></span>
                        </div>
                        <button class="btn icon-cart radius transition">COMPRAR</button>
                    </div>
                </form>
            </header>
            <div class="product_description_thumb">
                <img class="radius" src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title="">
            </div>
        </div>
    </article>
</main> 