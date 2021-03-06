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
        
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        
        <script>  function initMap() {
            var la = parseFloat(document.getElementById("latitude").value);
            var lo = parseFloat(document.getElementById("longitude").value);
            
           map = new google.maps.Map(document.getElementById("map"), {
             center: { lat: la, lng: lo },
             zoom: 15,
           });            
                }</script>
        
        <link href=css/bootstrap.min.css rel=stylesheet>
     
    </head>
    <body>
        <?php if ($detect->isMobile()):?>        
        
        <div class=container>
                <div class="col-lg-12 col-md-12 page-header">
                    <h2><strong>Mapa de Queimadas</strong></h2>
                </div>
            </div>
        <button class="btn btn-primary" style="width:100%" onclick="getLocation()">Pegar Coordenadas</button>
        <p id="demo"></p>
            <div class=container>
                <div class="panel panel-default">
                    <div class=panel-heading><strong>Coordenadas Geográficas</strong></div>
                    <div class=panel-body>
                        <form action="/src/salvar.php" class="col-xs-12" method="post">
                            <div class=form-group>
                                <label for=latitude> Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" readonly>
                            </div>
                            <div class=form-group>
                                <label for=longitude> Longitude</label>
                                <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" readonly>
                            </div>
                            <div class=form-group>
                                <label for=longitude> Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" readonly>
                            </div>
                            <div class=form-group>
                                <input type="submit" class="btn btn-primary" value="Marcar Área">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class=container>
                <div class="panel panel-default">
                    <div class=panel-body>
                        <p class=help-block>  Selecione no mapa o local do foco de incêndio: <span id=pontos class=badge></span></p>
                        <div id=map class=col-xs-12 style=height:450px></div>
                    </div>
                </div>
            </div>

            <div id=myModal class="modal fade bs-example-modal-sm" tabindex=-1 role=dialog aria-labelledby=mySmallModalLabel>
                <div class="modal-dialog modal-sm">
                    <div class=modal-content>
                        <div class=modal-header>
                            <button type=button class=close data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                                <h4 class=modal-title id=mySmallModalLabel>Mapa de Queimadas</h4>
                            teste1
                        </div>
                        <div class=modal-body>
                            <p id=msg></p>
                        </div>
                    </div>
                </div>
            </div>
        
            <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
            <script src=http://maps.google.com/maps/api/js? type=text/javascript></script>
            <script src=js/bootstrap.min.js></script>
            
            <script>
               
             var latit = document.getElementById("latitude");
             var longit = document.getElementById("longitude");
             var ender = document.getElementById("endereco");
                
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    
  } else {
    alert("Geolocalizão não suportada");
  }
}
                                
function showPosition(position) {
    latit.value = position.coords.latitude;
    longit.value = position.coords.longitude;
    endereco.value = position.coords.address;
    initMap();
       
}
                
                $(document).ready(function(){
                                    
                });
            </script>    
                
            <?php if (isset($_GET['null']) == true): ?>
                <script>
                    $(window).load(function(){
                        modal.innerHTML = "Não conseguimos obter suas coordenadas, tente novamente.";
                        $("#myModal").modal("show")
                    }) 
                </script>
            <?php endif; ?>
<script
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkmC9ynKXEWnieZv1KcolHlLxiuJSYkk&callback=getLocation&v=weekly"
              async
            ></script>
            <script>                
                
                $(document).ready(function(){   
                                
                    var h = new google.maps.Geocoder;
                                        
//                     modal = document.getElementById("msg");
//                     latitude = document.getElementById("latitude");
//                     longitude = document.getElementById("longitude");
//                     endereco = document.getElementById("endereco");
//                     pontos = document.getElementById("pontos");
//                     if(navigator.geolocation){
//                         navigator.geolocation.getCurrentPosition(d)
//                     }else{
//                         modal.innerHTML="O seu navegador não suporta Geolocalização.";
//                         $("#myModal").modal("show")
//                     }
                    function d(i){
                        var j = new google.maps.LatLng(i.coords.latitude,i.coords.longitude);
                        latitude.value = i.coords.latitude;
                        longitude.value = i.coords.longitude;
                        b = new google.maps.Marker({ position: new google.maps.LatLng(parseFloat(i.coords.latitude), parseFloat(i.coords.longitude)), map:g});
                        google.maps.event.addListener(b,"click",(function(k,l){
                            return function(){
                                        e.setContent("Seu local");
                                        e.open(g,k)}})(b,c));
                                        h.geocode({location:j},function(l,k){
                                            if(k===google.maps.GeocoderStatus.OK){
                                                if(l[1]) endereco.value = l[1].formatted_address;
                                                else window.alert(" Nenhum resultado encontrado");                                                
                                            }else{
                                                window.alert("Falha: " + k)
                                            }
                                        })
                    }
                    var g = new google.maps.Map(document.getElementById("map"),{
                        zoom:10,
                        scrollwheel:false, 
                        center: new google.maps.LatLng(-23.5483498, -46.3801577),
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    });
                                       
                    var e = new google.maps.InfoWindow();
                    var h = new google.maps.Geocoder;
                    var b, c;
                    var f= new XMLHttpRequest();
                    f.onreadystatechange = function() if(f.readyState==4&&f.status==200) a(f);
                    f.open("GET","dados/dados.xml",true);
                    f.send();
                    function a(j){
                        var r = j.responseXML;
                        var l=[];
                        var k=[];
                        var o=[];
                        var p=[];
                        var n=[];
                        var q=[];
                        var m=[];
                        var i=[];
                        
                        for(c=0;c<r.getElementsByTagName("coordenadas").length;c++){
                            l[c] = r.getElementsByTagName("coordenadas")[c];
                            k[c] = l[c].childNodes[0].nodeValue;
                            q[c] = k[c].split(":");
                            n[c] = q[c][0].split(",");
                            pontos.innerHTML = k.length;
                            o[c] = n[c][0];
                            p[c] = n[c][1];
                            m[c] = r.getElementsByTagName("endereco")[c];
                            i[c] = m[c].childNodes[0].nodeValue;
                            b = newgoogle.maps.Marker({
                                    position: new google.maps.LatLng(parseFloat(o[c]),parseFloat(p[c])),map:g,icon:"forest-fire.png"
                                });
                            google.maps.event.addListener(b,"click",(function(s,t){
                                return function(){
                                    e.setContent("Coordenadas: "+o[t]+", "+p[t]+" <br> Endereço:"+i[t]);
                                    e.open(g,s)
                                }
                            })(b,c))
                        }
                    }
                });
            </script>
            
        <?php else: ?>
            <div class=container>
                <div class="col-lg-12 col-md-12 page-header">
                    <h1 class=text><strong>Este sistema funciona apenas em dispositivo móvel.</strong></h1>
                </div>
            </div>
        <?php endif ;?>
    </body>
</html>
