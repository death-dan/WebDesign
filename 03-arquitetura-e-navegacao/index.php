<?php
    define("BASE", "https://localhost/GitEssentials/WebDesign/03-arquitetura-e-navegacao/");
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
    <link rel="stylesheet" href="Assets/Styles/Icons.css">
    <link href="https://file.myfontastic.com/d3XTWRRNXU2GYaFhhAUY4W/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Styles/Boot.css">
    <link rel="stylesheet" href="Themes/WdpShoes/Style.css">
    <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png">

    <script src="Assets/Js/jquery.js"></script>
    <script src="Assets/Js/script.js"></script>
</head>
<body>
    <?php
        require "./Themes/WdpShoes/header.php";
        require "./Themes/WdpShoes/index.php";
        require "./Themes/WdpShoes/footer.php";
    ?>
</body>
</html>