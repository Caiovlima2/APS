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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script>
        let map;
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 8,
          });
        }
        </script>
        <meta name=description content="APS"/>
        <link href=css/bootstrap.min.css rel=stylesheet>
        <link href=css/mapa.css rel=stylesheet>
    </head>
    <body>
        <?php if ($detect->isMobile()):?>
        <div class=container>
        <div class="col-lg-12 col-md-12 page-header">
        <h2><strong>Mapa de Queimadas</strong></h2>
        </div>
    </div>

    <div class=container>
    <div class="panel panel-default">
        <div class=panel-heading>Coordenadas Geográficas</div>
        <div class=panel-body>
            <form action=lib/salvar.php class=col-xs-12 method=post>
                <div class=form-group>
                    <label for=latitude>Latitude</label>
                    <input type=text class=form-control name=latitude id=latitude placeholder=Latitude readonly=readonly>
                </div>
                <div class=form-group>
                    <label for=longitude> Longitude</label>
                    <input type=text class=form-control name=longitude id=longitude placeholder=Longitude readonly=readonly>
                </div>
                <div class=form-group>
                    <label for=longitude> Endereço</label>
                    <input type=text class=form-control name=endereco id=endereco placeholder=Endereço readonly=readonly>
                </div>
                <div class=form-group>
                    <button class="btn btn-primary getLocation"><span class="glyphicon glyphiconexclamation-sign" aria-hidden=true></span> Marcar área</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class=container>
    <div class="panel panel-default">
        <div class=panel-heading>Mapa das Queimadas</div>
        <div class=panel-body>
            <p class=help-block>Pontos de Queimadas: <span id=pontos class=badge></span></p>
            <div id=map class=col-xs-12 style=height:450px></div>
            </div>
        </div>
    </div>
        
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkmC9ynKXEWnieZv1KcolHlLxiuJSYkk&callback=initMap&v=weekly"
      async
    ></script>
        
        <div id=myModal class="modal fade bs-example-modal-sm" tabindex=-1 role=dialog aria-labelledby=mySmallModalLabel>
    <div class="modal-dialog modal-sm">
        <div class=modal-content>
            <div class=modal-header>
                <button type=button class=close data-dismiss=modal aria-label=Close><span ariahidden=true>×</span></button>
                    <h4 class=modal-title id=mySmallModalLabel>Mapa de Queimadas</h4>
            </div>
            <div class=modal-body>
                <p id=msg></p>
            </div>
        </div>
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



