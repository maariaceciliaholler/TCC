<!DOCTYPE html>
<html lang="pt-br">
<?php

//include 'menu.php';
$imagem = array(); // Criamos um array com o nome das imagens.
$imagem[1] = "../images/FasePalavras/ConfiguracaoA.png"; // Recheamos este array
$imagem[2] = "../images/FasePalavras/ConfiguracaoB.png";
$imagem[3] = "../images/FasePalavras/ConfiguracaoC.png";
$imagem[4] = "../images/FasePalavras/ConfiguracaoD.png";
$imagem[5] = "../images/FasePalavras/ConfiguracaoE.png";
$imagem[6] = "../images/FasePalavras/ConfiguracaoF.png";
$imagem[7] = "../images/FasePalavras/ConfiguracaoG.png";
$imagem[8] = "../images/FasePalavras/ConfiguracaoI.png";
$imagem[9] = "../images/FasePalavras/ConfiguracaoL.png";
$imagem[10] = "../images/FasePalavras/ConfiguracaoM.png";
$imagem[11] = "../images/FasePalavras/ConfiguracaoN.png";
$imagem[12] = "../images/FasePalavras/ConfiguracaoO.png";
$imagem[13] = "../images/FasePalavras/ConfiguracaoP.png";
$imagem[14] = "../images/FasePalavras/ConfiguracaoQ.png";
$imagem[15] = "../images/FasePalavras/ConfiguracaoR.png";
$imagem[16] = "../images/FasePalavras/ConfiguracaoS.png";
$imagem[17] = "../images/FasePalavras/ConfiguracaoT.png";
$imagem[18] = "../images/FasePalavras/ConfiguracaoU.png";
$imagem[19] = "../images/FasePalavras/ConfiguracaoV.png";
$contador = count($imagem); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(1,$contador); // Esta variável irá gerar um número aleatório (rand();), partindo do 1 até o número de dados que estão dentro do array..

$resposta=isset($_POST['resposta'])?$_POST['resposta']: "";
session_start();
$_SESSION["acertos"] = isset($_SESSION["acertos"])?$_SESSION["acertos"]: 0;
$_SESSION["correta"] = isset($_SESSION["correta"])?$_SESSION["correta"]: "";

if($resposta == $_SESSION["correta"])
$_SESSION["acertos"]++;

if($_SESSION["acertos"] == 5){
  header('Location: palavras.php');
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <!-- Favicon  -->
    <link rel="icon" href="../images/Detalhes/GloveLogo.png">
    <style>
       img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        #headerPopup{
        width:75%;
        margin:0 auto;
        }

        #headerPopup iframe{
        width:100%;
        margin:0 auto;
        }
        .coluna-50 {
        width: 50%;
        }
        .card-body{
          color: #000000;
        }
    </style>
   
    <title>SMARTGLOVE - Jogo</title>

</head>
<body class="header">
    <nav class="navbar navbar bg" >
        <a class="navbar-brand" href="../index.html" >
            <img src="../images/LogoSite.png" class="d-inline-block align-top" alt="">
        </a>
        <h6 style="color:#212529;">Fase Letras</h6>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">
          <img style=" margin: 0 auto;margin-top: 5em;" src="<?php echo $imagem[$aleatorio]; ?>"/>
        </div>
      <div class="col">
        <div class="card" style="width: 18rem; color: black; margin: 0 auto;margin-top: 10em;">
          <div class="card-body">
            <h5 class="card-title" style="color:#000;" >Responda</h5>
            <p class="card-text" style="color:#212529;" >Qual letra está representada por essa configuração de mão?</p>
            <!-- <h5 style="color:#212529;"><?php echo $_SESSION["acertos"];?></h5>
            <h5 style="color:#212529;"><?php echo $resposta;?></h5>
            <h5 style="color:#212529;"><?php echo $_SESSION["correta"];?></h5> -->
            <form method="post">
              <input type="text" id="resposta" name="resposta" >
              <input type="submit" value="enviar">
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
$valor = $imagem[$aleatorio];

if($imagem[$aleatorio] == $imagem[1]){
  
  $_SESSION["correta"] = "a" or $_SESSION["correta"] = "A";
  
}
elseif($imagem[$aleatorio] == $imagem[2]){
 
  $_SESSION["correta"] = "b" or $_SESSION["correta"] = "B";

}
elseif($imagem[$aleatorio] == $imagem[3]){
 
  $_SESSION["correta"] = "c" or $_SESSION["correta"] = "C";
}
elseif($imagem[$aleatorio] == $imagem[4]){
  
  $_SESSION["correta"] = "d" or $_SESSION["correta"] = "D";
}
elseif($imagem[$aleatorio] == $imagem[5]){
 
  $_SESSION["correta"] = "e" or $_SESSION["correta"] = "E";
}
elseif($imagem[$aleatorio] == $imagem[6]){
  
  $_SESSION["correta"] = "f" or $_SESSION["correta"] = "F";
}
elseif($imagem[$aleatorio] == $imagem[7]){
  
  $_SESSION["correta"] = "g" or $_SESSION["correta"] = "G";
}
elseif($imagem[$aleatorio] == $imagem[8]){
  
  $_SESSION["correta"] = "i" or $_SESSION["correta"] = "I";
}
elseif($imagem[$aleatorio] == $imagem[9]){
  
  $_SESSION["correta"] = "l" or $_SESSION["correta"] = "L";
}
elseif($imagem[$aleatorio] == $imagem[10]){
  
  $_SESSION["correta"] = "m" or $_SESSION["correta"] = "M";
}
elseif($imagem[$aleatorio] == $imagem[11]){
  
  $_SESSION["correta"] = "n" or $_SESSION["correta"] = "N";
}
elseif($imagem[$aleatorio] == $imagem[12]){
  
  $_SESSION["correta"] = "o" or $_SESSION["correta"] = "O";
}
elseif($imagem[$aleatorio] == $imagem[13]){
  
  $_SESSION["correta"] = "p" or $_SESSION["correta"] = "P";
}
elseif($imagem[$aleatorio] == $imagem[14]){
  
  $_SESSION["correta"] = "q" or $_SESSION["correta"] = "Q";
}
elseif($imagem[$aleatorio] == $imagem[15]){
  
  $_SESSION["correta"] = "r" or $_SESSION["correta"] = "R";
}
elseif($imagem[$aleatorio] == $imagem[16]){
  
  $_SESSION["correta"] = "s" or $_SESSION["correta"] = "S";
}
elseif($imagem[$aleatorio] == $imagem[17]){
  
  $_SESSION["correta"] = "t" or $_SESSION["correta"] = "T";
}
elseif($imagem[$aleatorio] == $imagem[18]){
  
  $_SESSION["correta"] = "u" or $_SESSION["correta"] = "U";
}
elseif($imagem[$aleatorio] == $imagem[19]){
  
  $_SESSION["correta"] = "v" or $_SESSION["correta"] = "V";
}
    if($_SESSION["acertos"] == 5){
      $_SESSION["acertos"] = 0;
      header('Location:palavras.php');
    }
?>
</body>
</html>