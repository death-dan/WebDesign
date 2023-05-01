<main class="main_content">
    <div class="main_slide j_slide">
        <?php 
            for ($i = 1; $i < 4; $i++) {
        ?>
                <a href="<?= $configBase ;?>/produto" title="" class="j_slide_item"><img src="<?= $configBase ;?>/Uploads/featured-<?= str_pad($i, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
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
                <div cl ass="pdt_gallery_list pdt_gallery_featured">
                    <?php
                        $pdt = "06";
                        require "{$configThemePath}/Templates/products.php";
                    ?>
                </div>

                <div class="pdt_gallery_list flex">
                    <?php 
                        $pdt = 0;
                        for($pdt = 1; $pdt < 5; $pdt++) {
                            require "{$configThemePath}/Templates/products.php";
                        }
                    ?>
                </div>
            </div>    

            <div class="pdt_gallery_normalize">
                <a href="<?= $configBase ;?>/produto">
                    <img src="<?= $configBase ;?>/Uploads/featured-01.jpg" alt="" class="pdt_gallery_item pdt_banner">
                </a>
            </div>

            <div class="pdt_gallery_normalize flex">
                    <?php 
                        $pdt = 0;
                        for($pdt = 5; $pdt < 9; $pdt++) {
                            require "{$configThemePath}/Templates/products.php";
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
                            <?php
                                $pdt = "15";
                                require "{$configThemePath}/Templates/products.php";
                            ?>
                        </div>

                        <div class="pdt_gallery_list flex">
                            <?php 
                                $pdt = 0;
                                for($pdt = 11; $pdt < 15; $pdt++) {
                                    require "{$configThemePath}/Templates/products.php";
                                }
                            ?>
                        </div>
                    </div> 
                </div>

                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <?php
                                $pdt = "09";
                                require "{$configThemePath}/Templates/products.php";
                            ?>
                        </div>

                        <div class="pdt_gallery_list flex">
                            <?php 
                                $pdt = 0;
                                for($pdt = 5; $pdt < 9; $pdt++) {
                                    require "{$configThemePath}/Templates/products.php";
                                }
                            ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <?php require "{$configThemePath}/Templates/blog.php"; ?>
</main>