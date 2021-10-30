<?php

echo "Teste";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['latitude'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
//      if ($_POST['latitude'] != null && $_POST['longitude'] != null && $_POST['endereco'] != null){
//         $f = fopen("../dados/dados.txt", "a+", 0);
//         $linha = $_POST['latitude'] . ", " . $_POST['longitude'] . " : " . $_POST['endereco'] . "\n";
//         fwrite($f, $linha, strlen($linha)); 
//         fclose($f);
//         echo "<script>alert("Deu certo!");</script>"     
//         echo "<script>window.location='../index.php';</script>";
//      }else{
//          echo "<script>window.location='../index.php?null=true';</script>"; 
//            echo "<script>alert("Deu errado!");</script>"     
//      }
?>
