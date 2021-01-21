<!DOCTYPE html>
<html lang="pt-br">
<?php
include 'menu.php'
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <!-- Favicon  -->
    <link rel="icon" href="../images/Detalhes/GloveLogo.png">
    <style>
       img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        #headerPopup{
        width:75%;
        margin:0 auto;
        }

        #headerPopup iframe{
        width:100%;
        margin:0 auto;
        }
    </style>
     <!-- caminho do jquery na maquina local -->
     <script  type="text/javascript" src="jquery.js"> </script>
         <!-- caminho da validação do jquery -->
         <script type="text/javascript" src="jquery.validate.js"> </script>
         <script type="text/javascript">
      
            $(document).ready(function()
            {
               var form = $("#formdados");
               var valor1 = $("#valor1");
               var valor2 = $("#valor2");
               var btn = $("p");
               var cont = 0;
  
               valor1.on("keyup",function()
               {
                  valor2.val(valor1.val());
            
                     if(valor1.val().char == "")
                     {
                        valor2.val("");
                     }
               });
               btn.on("click", function()
               {
               alert(form.serialize());
               });
               if(valor1 == "a"){
                cont++;
               }
            });
            
	    alert("Página em construção!");
      window.location="levels.html";
         </script>
   
    <title>SMARTGLOVE - Jogo</title>

</head>
<body class="header">
    <nav class="navbar navbar bg" >
        <a class="navbar-brand" href="../index.html" >
            <img src="../images/LogoSite.png" class="d-inline-block align-top" alt="">
        </a>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">
          <img style=" margin: 0 auto;margin-top: 5em;" src="<?php echo $imagem[$aleatorio]; ?>"/>
        </div>
      <div class="col">
        <div class="card" style="width: 18rem; color: black; margin: 0 auto;margin-top: 10em;">
          <div class="card-body">
            <h5 class="card-title" style="color:#000;" >Responda</h5>
            <p class="card-text" style="color:#212529;" >Qual letra está representada por essa configuração de mão?</p>
            <!-- <h5 style="color:#212529;"><?php echo $_SESSION["acertos"];?></h5>
            <h5 style="color:#212529;"><?php echo $resposta;?></h5>
            <h5 style="color:#212529;"><?php echo $_SESSION["correta"];?></h5> -->
            <form method="post">
              <input type="text" id="valor1" name="valor1" >
              <td> <input type="text" name="valor2" id="valor2" placeholder="Digite o preco do refrigerante"/></td>
              <input type="submit" value="enviar">
            </form>
          </div>
        </div>
      </div>
    </div>


</body>
</html>