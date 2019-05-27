<?php
include 'conexao.php';
include 'menu.php';

$pesquisar = $_POST['pesquisar'];

$result = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' ";
$result_nome = mysqli_query($conexao,$result);
?>

<body>
    <div id="list" class="row"> 
        <div class="table-responsive col-md-12">
        <label class="col-md-2 control-label" for="selectbasic"><h4>Nomes Encontrados</h4></label>
            <table class="table table-striped" cellspacing="0" cellpadding="0">               
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>CPF</th>
                        <th>Data</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados = mysqli_fetch_array($result_nome)){ ?>
                        <tr>
                            <td><?php echo $dados["id"];?></td>
                            <td><?php echo $dados["nome"];?></td>
                            <td><?php echo $dados["categoria"];?></td>
                            <td><?php echo $dados["cpf"];?></td>
                            <td><?php echo $dados["data"];?></td>                 
                            <form action="lista_de_tarefas.php" method="post">
                                <td class="actions">
                                    <a class="btn btn-success btn-xs" href="visualizar_user.php?id=<?php echo $dados['id'];?>" name="bt_visualizar">Visualizar</a>
                                    <a class="btn btn-warning btn-xs" href="editar_user.php?id=<?php echo $dados['id'];?>" name="bt_editar">Editar</a>                     
                                    <a class="btn btn-danger btn-xs" href="excluir_user.php?id=<?php echo $dados['id'];?>" name="bt_excluir">Excluir</a>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div>
</body>