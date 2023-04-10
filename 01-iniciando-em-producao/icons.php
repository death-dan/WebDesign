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

        h1 {
            font-size: 2em;
            font-weight: 700;
            margin: 10px 0;
        }

        p {
            margin: 10px 0;
        }

    </style>
</head>
<body>
    <div class="box">
        <div class="box_container">
            <h1>ICONES:</h1>
            <p class="icon-facebook">Facebook</p>
            <p class="icon-instagram">Instagram</p>
            <p class="icon-youtube">YouTube</p>
            <p class="icon-search">Search</p>

            <h1>LINKS:</h1>
            <p><a href="#" title="">Facebook</a></p>
            <p><a href="#" title="" class="icon-facebook">Facebook</a></p>

            <h1>BOTÔES:</h1>
            <a href="" title="" class="btn radius">Link Button</a>
            <button class="btn radius transition">Button</button>
            <span class="btn radius transition icon-search">Span Button</span>

            <p>Tamanhos</p>
            <a href="" title="" class="btn radius btn-small">Link Button</a>
            <a href="" title="" class="btn radius">Link Button</a>
            <a href="" title="" class="btn radius btn-big">Link Button</a>

            <p>Cores</p>
            <p>
                <span class="btn btn-green radius transition icon-search">Span Button</span>
                <span class="btn btn-green-out radius transition icon-search">Span Button</span>
            </p>
            <p>
                <span class="btn btn-blue-out radius transition icon-search">Span Button</span> 
                <span class="btn btn-blue radius transition icon-search">Span Button</span>      
            </p>
            <p>
                <span class="btn btn-yellow radius transition icon-search">Span Button</span>
                <span class="btn btn-yellow-out radius transition icon-search">Span Button</span>       
            </p>
            <p>
                <span class="btn btn-red-out radius transition icon-search">Span Button</span> 
                <span class="btn btn-red radius transition icon-search">Span Button</span>     
            </p>
        </div>
    </div>
    
</body>
</html>