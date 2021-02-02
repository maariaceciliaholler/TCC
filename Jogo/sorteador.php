<?php
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";


// testes
$dados= "";
$linha= "";

$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT * FROM fotosPalavras");
$dados = array();
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
   echo $dados['nomePalavras'] = $linha['nomePalavras']."< ---- >";
   echo $dados['valorPalavras']= $linha['valorPalavras']."<br>";

}
//acabou

?>