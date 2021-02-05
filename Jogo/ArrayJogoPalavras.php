<?php
//Palavras
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

// Constroi um array para fazer o sorteio da imagem das palavras
$dadosPalavra= 0;
$linhaPalavra= 0;
//Pesquisa
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem FROM palavras");
$dadosPalavra = array();
   while ($linhaPalavra = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $dadosPalavra[] = $linhaPalavra['imagem'];
   }
//Inicia o contador e seleciona um numero aleatório
$contadorPalavra = count($dadosPalavra); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorioPalavra = rand(0,$contadorPalavra-1);

//pula linha
$linhaPalavra1= 0;
 //Obter valor de cada imagem das Palavra
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT valor FROM palavras");
$valorPalavra = array();
   while ($linhaPalavra1 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $valorPalavra[] = $linhaPalavra1['valor'];
   }

//Respostas e verificação do nível palavras
session_start();
$respostaPalavra=isset($_POST['respostaPalavra'])?$_POST['respostaPalavra']: "";
$respostaPalavra = strtolower($respostaPalavra);

$_SESSION["acertosPalavra"] = isset($_SESSION["acertosPalavra"])?$_SESSION["acertosPalavra"]: 0;

if($respostaPalavra == $_SESSION["correta"]){
$_SESSION["acertosPalavra"]++;
header('Location:palavras.php');
}
if($respostaPalavra != ""){
   if($respostaPalavra != $_SESSION["correta"]){
    ?><script>
       alert("Resposta incorreta!\n Tente novamente");
      window.location="palavras.php";
    </script>
     <?php
     }
   }
$_SESSION["correta"] = $valorPalavra[$aleatorioPalavra];

if($_SESSION["acertosPalavra"] == 5){
   $_SESSION["acertosPalavra"] = 0;
   header('Location:aleatorio.php');
 }
