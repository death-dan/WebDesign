<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Assets/Styles/Boot.css">

    <title>Document</title>

    <style>
        .exemple {
            background-color: var(--green);
            padding-bottom: calc(33.3% - 30px);
        }

        .h:hover {
            background-color: var(--green_h);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Lorem ipsum dolor sit amet consectetu</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, officia harum? Vero laborum voluptates voluptatibus commodi eius voluptate porro magnam modi dolore! Nemo illum modi in dolor dicta quam mollitia.</p>
            <a href="">ipsum dolor sit</a>
        </header>

        <img src="Assets/imagem.jpg" alt="" title="">

        <div class="container-embed">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RDmSwANy4PM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div class="flex">
            <div class="flex-3 rounded exemple">ROUNDED</div>
            <div class="flex-3 radius exemple">RADIUS</div>
            <div class="flex-3 transition exemple h">TRANSITION</div>
        </div>

    </div>
</body>
</html>