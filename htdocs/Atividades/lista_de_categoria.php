<?php
$conexao = mysqli_connect("localhost", "root","","test");
$consultar = "SELECT * FROM categoria";
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
        <label class="col-md-2 control-label" for="selectbasic"><h4>Lista de Categoria</h4></label>
            <table class="table table-striped" cellspacing="0" cellpadding="0">               
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados = $consulta->fetch_array()){ ?>
                        <tr>
                            <td><?php echo $dados["idcategoria"];?></td>
                            <td><?php echo $dados["descricao_categoria"];?></td>               
                            <form action="lista_de_user.php" method="post">
                                <td class="actions">                                            
                                    <a class="btn btn-danger btn-xs" href="excluir_categoria.php?idcategoria=<?php echo $dados['idcategoria'];?>" name="bt_excluir">Excluir</a>
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