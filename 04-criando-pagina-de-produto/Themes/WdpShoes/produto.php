<div class="main_content">
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
                <h1>CHECKOUT !!!!!</h1>
            </div>
        </article>
    </div>
</div> 