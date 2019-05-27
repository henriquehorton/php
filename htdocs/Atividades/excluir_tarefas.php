<!DOCTYPE html>
<?php
$conexao = mysqli_connect("localhost", "root","","test");
$dados = mysqli_query($conexao, "SELECT * FROM tarefas WHERE idtarefas ='{$_GET['idtarefas']}'");
$tarefa = mysqli_fetch_array($dados);
$edit_tarefa = $tarefa['descricao_tarefas'];
$edit_nome = $tarefa['responsavel'];
$edit_data = $tarefa['data_finalizacao'];
$edit_categoria = $tarefa['categoria'];
$edit_id = $_GET['idtarefas'];
?>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRUD com Bootstrap 3</title>
 <link rel="stylesheet" type="text/css" href="main.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body>
<?php include 'menu.php';?>
<!-- Modal -->
 <div id="main" class="container-fluid">
  <h3 class="page-header">Tarefa #<?php echo $edit_id; ?> excluida com sucesso! </h3>
  
  <div class="row">
    <div class="col-md-4">
      <p><strong>Responsável</strong></p>
  	  <p><?php echo $edit_nome; ?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Descrição</strong></p>
  	  <p><?php echo $edit_tarefa; ?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Categoria</strong></p>
  	  <p><?php echo $edit_categoria; ?></p>
    </div>

    <div class="col-md-4">
      <p><strong>Data de finalização</strong></p>
  	  <p><?php echo $edit_data; ?></p>
    </div>
	

 
    <div class="col-md-8">
      <p><strong></strong></p>
  	  <p>  </p>
    </div>
 </div>
 
 <hr>
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="lista_de_tarefas.php" class="btn btn-primary">voltar</a>
	 
	 
   </div>
 </div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</div></body>

</html>   

<?php
$conexao = mysqli_connect("localhost", "root","","test");
$dados = mysqli_query($conexao, "SELECT * FROM tarefas WHERE idtarefas ='{$_GET['idtarefas']}'");
$produto = mysqli_fetch_array($dados);
$excluido = $produto['descricao_tarefas'];
?>
<?php
$conexao = mysqli_connect("localhost", "root","","test");
$idexckuir = $_GET["idtarefas"];
$sql = "DELETE FROM tarefas WHERE idtarefas ='{$_GET['idtarefas']}'";
$result = mysqli_query($conexao,$sql);          
?>  


