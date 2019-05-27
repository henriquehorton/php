<?php
    $conexao = mysqli_connect("localhost", "root","","test")
?>
<?php
    $consultar_resp = "SELECT * FROM responsaveis";
    $consulta_resp =$conexao->query($consultar_resp);
    $consultar_cat = "SELECT * FROM categoria";
    $consulta_cat =$conexao->query($consultar_cat);
?>

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


        <label class="col-md-1 control-label" for="">Categoria<h11>*</h11></label>  
        <div class="col-md-4">
        <form action="" method="post">
            <input id="descricao" name="descricao" type="text" placeholder="" class="form-control input-md" required=""> 
        </form>
        </div>


<div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
            <input type="submit" value="Cadastrar" name="botao" class="btn btn-xs btn-primary classAdd" >
            
            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Limpar</button>
        </div>
    </div>    

<?php
                    if(isset($_POST["botao"])){
                    $vcategoria = $_POST["descricao"];
                    $con = mysqli_connect("localhost","root","","test");
                    $sql = "INSERT INTO categoria (descricao_categoria) VALUES ('$vcategoria')";
                    if (mysqli_query($con, $sql)) {
                     echo "Categoria " ,$vcategoria," criada com sucesso!";
                 } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($con);
                 }
                 
                }?>
</div>
</form>


</body>
</html>