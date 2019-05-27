<?php
$conexao = mysqli_connect("localhost", "root","","test");
$dados = mysqli_query($conexao, "SELECT * FROM tarefas WHERE idtarefas ='{$_GET['idtarefas']}'");
$tarefa = mysqli_fetch_array($dados);
$edit_tarefa = $tarefa['descricao_tarefas'];
$edit_nome = $tarefa['responsavel'];
$edit_data = $tarefa['data_finalizacao'];
$edit_categoria = $tarefa['categoria'];

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
<label class="col-md-2 control-label" for="selectbasic"><h3>Editando Formulario</h3></label>
    <div class="form-group">    
        <label class="col-md-2 control-label" for="selectbasic">Responsável <h11>*</h11></label>    
        <div class="col-md-3">
            <select id="responsavel" name="responsavel" class="form-control">
                <option value="<?= $edit_nome ?>"><?php echo $edit_nome?></option>
                <?php while ($dados = $consulta_resp->fetch_array()){ ?>
                <option value="<?php echo $dados["nome"]?>"><?php echo $dados["nome"]?></option>
                <?php }?>                
            </select>
        </div>

    <div class="form-group">    
        <label class="col-md-2 control-label" for="selectbasic">Categoria <h11>*</h11></label>    
        <div class="col-md-3">
            <select id="categoria" name="categoria" class="form-control">
                <option value="<?= $edit_categoria ?>"><?php echo $edit_categoria?></option>
                <?php while ($dados = $consulta_cat->fetch_array()){ ?>
                <option value="<?php echo $dados["descricao_categoria"]?>"><?php echo $dados["descricao_categoria"]?></option>
                <?php }?>                
            </select>
        </div>

        <label class="col-md-1 control-label" for="">Descrição<h11>*</h11></label>  
        <div class="col-md-4">
        <form action="" method="post">
            <input id="descricao" name="descricao" value="<?= $edit_tarefa ?>" type="text" placeholder="" class="form-control input-md" required=""> 
        </form>
        </div>

        <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
        <div class="col-md-2">
            <input id="data" name="data"  value="<?= $edit_data ?>" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
        </div>

<div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
            <input type="submit" href="lista_de_tarefas.php" value="Atualizar" name="botao" class="btn btn-xs btn-primary classAdd" >
            <a class="btn btn-danger btn-xs" href="lista_de_tarefas.php?idtarefas=<?php echo $dados['idtarefas'];?>" name="bt_excluir">Voltar</a>
            
        </div>
    </div>    

<?php

if(isset($_POST["botao"])){
    $vname =  $_POST["responsavel"];
    $vcategoria =  $_POST["categoria"];
    $vdescricao =  $_POST["descricao"];
    $vdata = $_POST["data"];
    $sql = "UPDATE tarefas SET DESCRICAO_TAREFAS='$vdescricao', RESPONSAVEL='$vname', DATA_FINALIZACAO='$vdata', CATEGORIA='$vcategoria' WHERE idtarefas ='{$_GET['idtarefas']}'";
    $result = mysqli_query($conexao,$sql);
    echo "Editado com sucesso";


}?>
</div>
</form>


</body>
</html>