<?php
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

               $ext = strtolower(substr($_FILES['imagem']['name'],-4)); 
                $new_name = date("Y.m.d-H.i.s") . $ext; 
                $dir = '../images/'.$_POST['submit']."/"; 
                move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);

                $imagem = $_FILES['imagem']$new_name;
                $valor = $_POST['valor'];

                $pdo = Conexao::getInstance();
                $stmt = $pdo->prepare("INSERT INTO ".$_POST['submit']."(imagem,valor) VALUES('".$imagem."', '".$valor."' )");
                $stmt->execute();
                var_dump($imagem);


 
// testes
// $dados= "";
// $linha= "";


// $consulta = $pdo->query("SELECT * FROM fotosPalavras");
// $dados = array();
// while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
//    echo $dados['nomePalavras'] = $linha['nomePalavras']."< ---- >";
//    echo $dados['valorPalavras']= $linha['valorPalavras']."<br>";

// }
//acabou

?>