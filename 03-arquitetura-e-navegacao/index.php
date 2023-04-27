<?php
    define("BASE", "https://localhost/GitEssentials/WebDesign/03-arquitetura-e-navegacao");
    define("THEME", "WdpShoes");
    define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
    define("THEME_LINK", BASE . "/Themes/" . THEME);

    $configBase = BASE;
    $configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
    $configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
    $configThemePath = THEME_PATH;
    $configThemeLink = THEME_LINK;
    $configSiteName = "WdpShoes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WdpShoes | Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $configBase ;?>/Assets/Styles/Icons.css">
    <link href="https://file.myfontastic.com/d3XTWRRNXU2GYaFhhAUY4W/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $configBase ;?>/Assets/Styles/Boot.css">
    <link rel="stylesheet" href="<?= $configThemeLink ;?>/Style.css">
    <link rel="shortcut icon" href="<?= $configThemeLink ;?>/Images/favicon.png">

    <script src="<?= $configBase ;?>/Assets/Js/jquery.js"></script>
    <script src="<?= $configBase ;?>/Assets/Js/script.js"></script>
</head>
<body>
    <?php
        
        //HEADER
        require "{$configThemePath}/header.php";
        require "{$configThemePath}/index.php";

        if (10 == 20) {
            //QUERY STRING
            if (file_exists("{$configThemePath}/{$configUrl[0]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}.php")) {
                //theme root
                require "{$configThemePath}/{$configUrl[0]}.php";
            } elseif (!empty($configUrl[1]) && file_exists("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php")) {
                //theme folder
                require "{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php";
            } else {
                //error 404
                if (file_exists("{$configThemePath}/404.php") &&  !is_dir("{$configThemePath}/{$configUrl[0]}.php")) {
                    require "{$configThemePath}/{$configUrl[0]}.php";
                } else {
                    echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe mas a página que você tento acessar não existe ou foi removida!</div></div>";
                }
            }
        }
        
        
        //FOOTER
        require "{$configThemePath}/footer.php";
    ?>
</body>
</html>