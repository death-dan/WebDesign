<article class="main_content">
    <div class="container main-checkout">
        <header class="checkout_header">
            <h1><?= $configSiteName; ?></h1>    
            <p>3 produtos no carrinho</p>
        </header>
        <span class="btn radius transition icon-car">Finalizar compra</span>

        <section class="checkout_products">
            <?php
                for ($checkout = 1; $checkout < 4; $checkout++) {
            ?>  
                    <article class="checkout_products_item">
                        <div class="checkout_products_item_thumb">
                            <img src="<?= $configBase; ?>/Uploads/products/0<?= $checkout; ?>.jpg" alt="">
                        </div>
                        <div class="checkout_products_item_desc">
                            <h1>Calça Moletom Confort Mama Latina</h1>
                            <p class="checkout_products_item_price">R$ 59,00 <span>R$ 79,00</span></p>
                            <p>Tamanho G | Cor: Preto</p>
                            <p class="checkout_products_item_qtd">
                                Quantidade: 1
                                <span class="icon-plus icon-notext radius transition"></span>
                                <span class="icon-minus icon-notext radius transition"></span>
                            </p>
                        </div>
                    </article>
            <?php
                }
            ?>
        </section>

        <footer class="checkout_footer">
            <div class="checkout_footer_calc">
                <input type="text" class="radius transition" placeholder="Informe seu CEP:">
                <button class="radius transition">Calcular frete</button>
            </div>
            <div class="checkout_footer_price">
                <p>Sub total: R$ 177,00</p>
                <p>Frete: R$ 44,00</p>
                <p><b>Total: 221,00</b></p>
                <span class="btn radius transitio icon-cart">Finalizar compra</span>
            </div>
        </footer>
    </div>
</article>