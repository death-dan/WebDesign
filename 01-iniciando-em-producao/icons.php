<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icones, Links e Botões</title>

    <link rel="stylesheet" href="Assets/Styles/Boot.css">
    <link rel="stylesheet" href="Assets/Styles/Icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Ubuntu:wght@400;500;700&display=swap');
        * {
            font-family: 'Open Sans', sans-serif;
        }

        .box {
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .box_container {
            width: 600px;
            margin: auto;
            padding: 0 20px 20px 20px;
            background-color: #fbfbfb;
        }

        .box_container h1 {
            margin: 20px 0 10px 0;
        }

    </style>
</head>
<body>
    <div class="box">
        <div class="box_container">
            <h1>ICONES</h1>
            <p class="icon-facebook">Facebook</p>
            <p class="icon-instagram">Instagram</p>
            <p class="icon-youtube">YouTube</p>
            <p class="icon-search">Search</p>
        </div>
    </div>
</body>
</html>