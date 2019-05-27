<?php
$conexao = mysqli_connect("localhost", "root","","test");
$consultar = "SELECT * FROM tarefas";
$consulta =$conexao->query($consultar);
?>
<html>
<head>
    <title>Pagina para cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" >
    
</head>
<?php include 'menu.php';?>
<body>
    <div id="list" class="row"> 
        <div class="table-responsive col-md-12">
        <label class="col-md-2 control-label" for="selectbasic"><h4>Lista de tarefas</h4></label>
            <table class="table table-striped" cellspacing="0" cellpadding="0">               
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Responsável</th>
                        <th>Categoria</th>
                        <th>Descrição da tarefa</th>
                        <th>Finalização da tarefa</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados = $consulta->fetch_array()){ ?>
                        <tr>
                            <td><?php echo $dados["idtarefas"];?></td>
                            <td><?php echo $dados["responsavel"];?></td>
                            <td><?php echo $dados["categoria"];?></td>
                            <td><?php echo $dados["descricao_tarefas"];?></td>
                            <td><?php echo $dados["data_finalizacao"];?></td>                 
                            <form action="lista_de_tarefas.php" method="post">
                                <td class="actions">
                                    <a class="btn btn-success btn-xs" href="visualizar.php?idtarefas=<?php echo $dados['idtarefas'];?>" name="bt_visualizar">Visualizar</a>
                                    <a class="btn btn-warning btn-xs" href="editar_tarefas.php?idtarefas=<?php echo $dados['idtarefas'];?>" name="bt_editar">Editar</a>                     
                                    <a class="btn btn-danger btn-xs" href="excluir_tarefas.php?idtarefas=<?php echo $dados['idtarefas'];?>" name="bt_excluir">Excluir</a>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div>
  

</body>
</html>           