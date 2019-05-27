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
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<?php include 'menu.php';?>
<form method="post" >
<div class="panel panel-primary">
    <div class="form-group">    
        <label class="col-md-2 control-label" for="selectbasic">Responsável <h11>*</h11></label>    
        <div class="col-md-3">
            <select id="responsavel" name="responsavel" class="form-control">
                <?php while ($dados = $consulta_resp->fetch_array()){ ?>
                <option value="<?php echo $dados["nome"]?>"><?php echo $dados["nome"]?></option>
                <?php }?>                
            </select>
        </div>

    <div class="form-group">    
        <label class="col-md-2 control-label" for="selectbasic">Categoria <h11>*</h11></label>    
        <div class="col-md-3">
            <select id="categoria" name="categoria" class="form-control">
                <?php while ($dados = $consulta_cat->fetch_array()){ ?>
                <option value="<?php echo $dados["descricao_categoria"]?>"><?php echo $dados["descricao_categoria"]?></option>
                <?php }?>                
            </select>
        </div>

        <label class="col-md-1 control-label" for="">Descrição<h11>*</h11></label>  
        <div class="col-md-4">
        <form action="" method="post">
            <input id="descricao" name="descricao" type="text" placeholder="" class="form-control input-md" required=""> 
        </form>
        </div>

        <label class="col-md-1 control-label" for="Nome">Finalização<h11>*</h11></label>  
        <div class="col-md-2">
            <input id="data" name="data" placeholder="AAAA-MM-DD" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
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


    $vname =  $_POST["responsavel"];
    $vcategoria =  $_POST["categoria"];
    $vdescricao =  $_POST["descricao"];
    $vdata = $_POST["data"];
    $sql = "INSERT INTO tarefas (descricao_tarefas,responsavel,categoria,data_finalizacao) VALUES ('$vdescricao','$vname','$vcategoria','$vdata')";
    


if (mysqli_query($conexao, $sql)) {
    echo "Cadastro feito com sucesso! ";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
}?>
</div>
</form>


</body>
</html>