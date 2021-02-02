<?php
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

if(isset($_FILES['nomePalavras']))
   {
      require 'FormsAddImg.php';

      date_default_timezone_set("Brazil/East");

      $nomePalavras     = $_FILES['nomePalavras'];
      $tmp_name = $_FILES['nomePalavras'];

      $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp");

      $dir = 'uploads/';

      for($i = 0; $i < count($tmp_name); $i++)
      {
         $ext = strtolower(substr($nomePalavras[$i],-4));

         if(in_array($ext, $allowedExts))
         {
            $new_name = date("Y.m.d-H.i.s") ."-". $i . $ext;

            $image = WideImage::load($tmp_name[$i]);

            $image = $image->resize(170, 180, 'outside');
            $image = $image->crop('center', 'center', 170, 180);

            $image->saveToFile($dir.$new_name);
         }
      }
   }

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

?>