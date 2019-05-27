
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
   <title>Pagina para cadastro</title>
</head>
<meta charset="utf-8">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<?php include 'menu.php';?>

<form method="post" >
<div class="panel panel-primary">


        <label class="col-md-1 control-label" for="">Responsável<h11>*</h11></label>  
        <div class="col-md-4">
        <form action="" method="post">
            <input id="responsavel" name="responsavel" type="text" placeholder="" class="form-control input-md" required=""> 
        </form>
        </div>


<div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
            <input type="submit" value="Cadastrar" name="botao" class="btn btn-xs btn-primary classAdd" >
            <a class="btn btn-danger btn-xs" href="lista_de_user.php" name="bt_excluir">Voltar</a>
                  </div>
    </div>    

                <?php
                    $conexao = mysqli_connect("localhost", "root","","test");
                    if(isset($_POST["botao"])){
                    $vresponsavel =  $_POST["responsavel"];
                    $sql = "UPDATE responsaveis SET nome='$vresponsavel', WHERE idresponsaveis ='{$_GET['idresponsaveis']}'";
                    $result = mysqli_query($conexao,$sql);
                ?>
                   
}
                <?php 
                    if (mysqli_query($conexao,$sql)) {
                     echo "Responsável " ,$vname," criada com sucesso!";
                 } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
                 }
                 
                ?>
</div>
</form>


</body>
</html>