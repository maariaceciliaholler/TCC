<?php
//Letras
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

$dadosLetras= 0;
$linhaLetras= 0;

//Constroi um array para fazer o sorteio
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem FROM letras");
$dadosLetras = array(1);
   while ($linhaLetras = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $dadosLetras[] = $linhaLetras['imagem'];
   }

//Inicia o contador e seleciona um numero aleatório
$contador = count($dadosLetras); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(0,$contador);

//pula linha
$linhaLetras1= 0;

 //Obter valor de cada imagem 
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT valor FROM letras");
$valorLetras = array();
   while ($linhaLetras1 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $valorLetras[] = $linhaLetras1['valor'];
   }
$contValor = count($valorLetras);

//Respostas e verificação
$resposta=isset($_POST['resposta'])?$_POST['resposta']: "";
$resposta = strtolower($resposta);
session_start();
$_SESSION["acertos"] = isset($_SESSION["acertos"])?$_SESSION["acertos"]: 0;
$_SESSION["correta"] = isset($_SESSION["correta"])?$_SESSION["correta"]: "";

if($resposta == $consulta[$aleatorio])
$_SESSION["acertos"]++;

// if($_SESSION["acertos"] == 5){
//   header('Location: palavras.php');
// }

if($_SESSION["acertos"] == 5){
   $_SESSION["acertos"] = 0;
   header('Location:palavras.php');
 }



$valor = "";
//Inicia o contador



// for($i = 0; $i <= 20; $i++){
//    if($dadosLetras[$aleatorio] == $contValor[$i]){
//    $valor = $valorLetras[$i];
//    $_SESSION["correta"] = $valor;
// }
 
// }

?>
