<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos e Erros</title>

    <link rel="stylesheet" href="Assets/Styles/Boot.css">
    <link rel="stylesheet" href="Assets/Styles/Icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Ubuntu:wght@400;500;700&display=swap');
        .flex-2 div {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="flex">
            <div class="flex-2">
                <div class="trigger trigger-success icon-success radius">Tudo certo !!</div>
                <div class="trigger trigger-info icon-info radius">Informando que está Tudo certo !!</div>
                <div class="trigger trigger-alert icon-alert radius">Alertando que estáTudo certo !!</div>
                <div class="trigger trigger-error icon-error radius">Tudo errado !!</div>
            </div>
            <div class="flex-2">
                <div class="trigger trigger-success-out icon-success radius">Tudo certo !!</div>
                <div class="trigger trigger-info-out icon-info radius">Informando que está Tudo certo !!</div>
                <div class="trigger trigger-alert-out icon-alert radius">Alertando que estáTudo certo !!</div>
                <div class="trigger trigger-error-out icon-error radius">Tudo errado !!</div>
            </div>
        </div>
    </div>
</body>
</html>