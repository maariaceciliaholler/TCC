<?php
//Letras
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

$dadosLetras= 0;
$linhaLetras= 0;

$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem,valor FROM letras");
$dadosLetras = array();
while ($linhaLetras = $consulta->fetch(PDO::FETCH_ASSOC)) {
   echo $dadosLetras['imagem'] = $linhaLetras['imagem'];
   echo $dadosLetras['valor']= $linhaLetras['valor']."<br>";

}
var_dump($dadosLetras);
$contador = count($dadosLetras); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(1,$contador);
echo $contador."<br>";
echo($aleatorio."<br>");
?>
<img style=" margin: 0 auto;margin-top: 5em;" src="<?php echo $dadosLetras['imagem']; ?>"/>
<h3><?php echo $dadosLetras['valor'];?></h3>
<?php

 //lalala

?>
