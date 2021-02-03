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
$aleatorio = rand(1,$contador);

//pula linha
$valorLetras= 0;
$linhaLetras1= 0;

 //Obter valor de cada imagem 
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT valor FROM letras");
$valorLetras = array(1);
   while ($linhaLetras1 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $valorLetras[] = $linhaLetras1['valor'];
   }

//Inicia o contador
for($i = 0; $i <= 20; $i++){
   if($dadosLetras[$aleatorio] == $valorLetras[$i]){
   $valor = $valorLetras[$i];
   $_SESSION["correta"] = $valor;
}
}


?>
