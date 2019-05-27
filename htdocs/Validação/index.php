<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
  <title>Título da página</title>    
  </head>
  <body class="text-center">
  <p style="color:red">
    <?php
      if(isset($_SESSION['msn'])){
        echo $_SESSION['msn'];
        unset ($_SESSION['msn']);
      }
    ?>
  </p>
    <form method="POST" action="validar.php">
        <a>Nome: </a>
        <input type="text" name="usuario" placeholder="Nome de Usúario" autofocus ><br><br>            
        <input type="submit" name="btn_enviar" value="Entrar">            
    </form>
   
  </body>
</html>