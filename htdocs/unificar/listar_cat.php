<?php
include 'conexao.php';
include 'menu.php';
$consultar = "SELECT * FROM categoria";
$consulta =$conexao->query($consultar);
?>
<body>
    <div id="list" class="row"> 
        <div class="table-responsive col-md-12">
        <label class="col-md-2 control-label" for="selectbasic"><h4>Lista de Categorias</h4></label>
            <table class="table table-striped" cellspacing="0" cellpadding="0">               
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da categoria</th>
                        <th> </th>
                        <th ></th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados = $consulta->fetch_array()){ ?>
                        <tr>
                            <td><?php echo $dados["idcategoria"];?></td>
                            <td><?php echo $dados["descricao_categoria"];?></td>
                            <td> </td>
                            <td> </td>               
                            <form action="lista_de_tarefas.php" method="post">
                                <td class="actions">                                    
                                    <a class="btn btn-warning btn-xs" href="editar_cat.php?idcategoria=<?php echo $dados['idcategoria'];?>" name="bt_editar">Editar</a>                     
                                    <a class="btn btn-danger btn-xs" href="excluir_cat.php?idcategoria=<?php echo $dados['idcategoria'];?>" name="bt_excluir">Excluir</a>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div>
  

</body>