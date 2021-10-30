<?php

$_SERVER["REQUEST_METHOD"] == "POST";

echo $_POST['latitude'];
echo $_POST['longitude'];
echo $_POST['endereco'];      
//       if ($_POST['latitude'] != null && $_POST['longitude'] != null && $_POST['endereco'] != null){
//          $f = fopen("../dados/dados.txt", "a+", 0);
//          $linha = $_POST['latitude'] . ", " . $_POST['longitude'] . " : " . $_POST['endereco'] . "\n";
//          fwrite($f, $linha, strlen($linha)); 
//          fclose($f);
//          echo "<script>alert("Deu certo!");</script>"     
//          echo "<script>window.location='../index.php';</script>";
//       }else{
//           echo "<script>alert("Deu errado!");</script>" 
//           echo "<script>window.location='../index.php?null=true';</script>"; 
              
//       }
?>
