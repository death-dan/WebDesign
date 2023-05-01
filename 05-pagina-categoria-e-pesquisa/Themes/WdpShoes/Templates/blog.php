<section class="blog_gallery">
    <div class="container">
        <div class="main_content_header">
            <h1>Blog</h1>
        </div>

        <div class="flex">
            <?php
                for ($b = 1; $b < 7; $b++) {
                    require "{$configThemePath}/Templates/articles.php";
                }
            ?>
        </div>
    </div>
</section>