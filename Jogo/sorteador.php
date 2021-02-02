<?php
include_once "conf/default.inc.php";
require_once "conf/Conexao.php";

$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT * FROM fotosPalavras");
echo $consulta;

?>