<?php
    if(empty($configUrl[1])) {
        require "{$configThemePath}/Blog/gallery.php";
    } else {
        require "{$configThemePath}/Blog/articles.php";
    }