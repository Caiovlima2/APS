<?php
    require_once('src/geraxml.php'); 
    require_once('src/Mobile_Detect.php');
    $detect = new Mobile_Detect;
?>
<!doctype html>
<html lang=pt-BR>
    <head>
        <meta name=robots content="noindex, nofollow"/>
        <link rel=icon href=forest-fire.png>
        <meta charset=UTF-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Mapa de Queimadas</title>
        <meta name=description content="APS"/>
        <link href=css/bootstrap.min.css rel=stylesheet>
    </head>
    <body>
        <?php if ($detect->isMobile()):?>
        <div class=container>
        <div class="col-lg-12 col-md-12 page-header">
        <h1><strong>Mapa de Queimadas</strong></h1>
        </div>
    </div>

    <?php else: ?>
    <div class=container>
        <div class="col-lg-12 col-md-12 page-header">
            <h1 class=text><strong>Este sistema funciona apenas em dispositivo móvel.</strong></h1>
        </div>
    </div>
    <?php endif ;?>

    </body>
</html>



