<?php
include 'conexao.php';
include 'menu.php';
include 'mask.html';
$consultar = "SELECT * FROM cadastro";
$consulta =$conexao->query($consultar);
?>

<head>
<?
function mask($val, $mask) {
	$maskared = '';
	$k = 0;
	for ($i = 0; $i <= strlen($mask) - 1; $i++) {
		if ($mask[$i] == '#') {
			if (isset ($val[$k]))
				$maskared .= $val[$k++];
		} else {
			if (isset ($mask[$i]))
				$maskared .= $mask[$i];
		}
	}
	return $maskared;
}
?>
</head>

<body>
    <div id="list" class="row"> 
        <div class="table-responsive col-md-12">
        <label class="col-md-2 control-label" for="selectbasic"><h4>Lista de Usuários</h4></label>
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
                    <?php while ($dados = $consulta->fetch_array()){ ?>
                        
                        <tr>
                      
                            <td><?php echo $dados["id"];?></td>
                            <td><?php echo $dados["nome"];?></td>
                            
                            <td><?php echo $dados["categoria"];?></td>
                            <td><?php echo $dados["cpf"];?></td>
                            <td><?php $datav = date($dados["data"]);?>                                
                                <?php echo date('d/m/Y', strtotime($dados["data"]));?></td>             
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