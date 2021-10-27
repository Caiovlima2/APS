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
        <link href=css/mapa.css>
        <script>
          
          let map;

            function initMap() {
              map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
              });
            }
          
        </script>
    </head>
    <body>
        <?php if ($detect->isMobile()):?>
        <div id="map"></div>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Vw0vepcXiM2vw2gE7UNpu3PFOTUPEEg&callback=initMap&v=weekly"
          async
        ></script>
      
    </body>
</html>



