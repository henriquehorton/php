<?php
include 'menu.php';
include 'conexao.php';
include 'mask.html';
$dados = mysqli_query($conexao, "SELECT * FROM cadastro WHERE id ='{$_GET['id']}'");
$tarefa = mysqli_fetch_array($dados);
$edit_nome = $tarefa['nome'];
$edit_data = $tarefa['data'];
$edit_categoria = $tarefa['categoria'];
$edit_id = $_GET['id'];
$edit_cpf = $tarefa['cpf'];

?>

<body>
<div id="main" class="container-fluid">
  <h3 class="page-header">Vizualizando Usuário #<?php echo $edit_id; ?></h3>
  
  <div class="row">
    <div class="col-md-4">
      <p><strong>Responsável</strong></p>
  	  <p><?php echo $edit_nome; ?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Categoria</strong></p>
  	  <p><?php echo $edit_categoria; ?></p>
    </div>

    <div class="col-md-4">
      <p><strong>CPF</strong></p>
  	  <p><?php echo $edit_cpf; ?></p>
    </div>
	

 
    <div class="col-md-8">
      <p><strong>Data</strong></p>
  	  <p><?php $edit_data = date($tarefa['data']);?>                                
      <?php echo date('d/m/Y', strtotime($tarefa['data']));?></p>
    </div>
 </div>
 
 <hr>
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="listar_user.php" class="btn btn-primary">voltar</a>
	 
	 
   </div>
 </div>
</div>
</body>