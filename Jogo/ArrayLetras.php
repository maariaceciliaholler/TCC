<?php
//Letras
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";


$dadosLetras= 0;
$linhaLetras= 0;
//Constroi um array para fazer o sorteio
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem FROM letras");
$dadosLetras = array();
   while ($linhaLetras = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $dadosLetras[] = $linhaLetras['imagem'];
   }
//Inicia o contador e seleciona um numero aleatório
$contador = count($dadosLetras); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(0,$contador-1);



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
session_start();
$resposta=isset($_POST['resposta'])?$_POST['resposta']: "";
$resposta = strtolower($resposta);

$_SESSION["acertos"] = isset($_SESSION["acertos"])?$_SESSION["acertos"]: 0;

if($resposta == $_SESSION["correta"]){
$_SESSION["acertos"]++;
header('Location:letras.php');
}
if($resposta != ""){
   if($resposta != $_SESSION["correta"]){
    ?><script>
       alert("Resposta incorreta!");
      window.location="letras.php";
    </script>
     <?php
     }
   }
$_SESSION["correta"] = $valorLetras[$aleatorio];

if($_SESSION["acertos"] == 5){
   $_SESSION["acertos"] = 0;
   header('Location:palavras.php');
 }


?>
