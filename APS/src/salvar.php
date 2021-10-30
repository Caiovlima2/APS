<?php

$_SERVER["REQUEST_METHOD"] == "POST";

$lat = $_POST['latitude'];
$long = $_POST['longitude'];
$end = $_POST['endereco'];      


       if(empty($lat){
       
              echo "<script type='text/javascript'>alert('Latitude Vazia');</script>";
              echo "<script>window.location='../index.php';</script>";
              
//        }elseif(empty($long){
       
//               echo "<script type='javascript'>alert('Longitude Vazia');";
//               echo "<script>window.location='../index.php';</script>";
              
//        }elseif(empty($end){
       
//               echo "<script type='javascript'>alert('Endereço Vazio');";
//               echo "<script>window.location='../index.php';</script>";
              
       }else{
              
              echo $lat;
              echo $long;
              echo $end;
       
       }


//        if ($lat != null && $_long != null && $end != null){
//           echo $lat;
//           echo $long;
//           echo $end;
//          $f = fopen("../dados/dados.txt", "a+", 0);
//          $linha = $_POST['latitude'] . ", " . $_POST['longitude'] . " : " . $_POST['endereco'] . "\n";
//          fwrite($f, $linha, strlen($linha)); 
//          fclose($f);
//         echo "<script>alert("Deu certo!");</script>"     
//          echo "<script>window.location='../index.php';</script>";
//        }else{
//          echo "Vazio";
//          echo "<script>alert("Deu errado!");</script>" 
//           echo "<script>window.location='../index.php?null=true';</script>"; 
             
//        }
?>
