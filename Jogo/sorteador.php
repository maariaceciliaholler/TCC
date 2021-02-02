<?php
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

               $ext = strtolower(substr($_FILES['imagem']['name'],-4)); 
                $new_name = date("Y.m.d-H.i.s") . $ext; 
                $dir = '../images/'.$_POST['submit']."/"; 
                move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);

                $imagem = $dir.$new_name;
                $valor = $_POST['valor'];

                $pdo = Conexao::getInstance();
                $stmt = $pdo->prepare("INSERT INTO ".$_POST['submit']."(imagem,valor) VALUES('".$imagem."', '".$valor."' )");
                $stmt->execute();
                header("location:FormsAddImg.html");


 
// testes


//Letras
function letras(){

$dadosLetras= "";
$linhaLetras= "";


$consulta = $pdo->query("SELECT * FROM Letras");
$dadosLetras = array();
while ($linhaLetras = $consulta->fetch(PDO::FETCH_ASSOC)) {
   $dadosLetras['imagem'] = $linha['imagem'];
   $dadosLetras['valor']= $linha['valor'];

}
}
//acabou

?>