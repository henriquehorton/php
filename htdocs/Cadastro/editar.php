<?php
session_start(); # Deve ser a primeira linha do arquivo

?>
<?php
$ideditar = $_SESSION['carregarid'];
$conexao = mysqli_connect("localhost", "root","","anglo");
$dados = mysqli_query($conexao, "SELECT * FROM tarefas WHERE id ='{$ideditar}'");
$produto = mysqli_fetch_array($dados);
$editado = $produto['descricao'];

?>
<?php
$campoeditando=$_POST['editando'];
$sql = "UPDATE tarefas SET DESCRICAO='$campoeditando' WHERE id ='{$ideditar}'";
$result = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TESTE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="table_tarefas">
        <h1 class="page-header">Dados da tabela.</h1>

        <?php
        $conexao = mysqli_connect("localhost", "root","","anglo")
        ?>
        <?php
        $consultar = "SELECT * FROM tarefas";
        $consulta =$conexao->query($consultar);
        echo $editado, " Editado com Sucesso";
        ?>
        <?php

        ?>
        <table border="1">
            <tr>
                <td>"Código"</td>
                <td>"Descrição"</td>
                <td>"Ações"</td>
            </tr>
            <?php while ($dados = $consulta->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dados["id"];?></td>
                    <td><?php echo $dados["descricao"];?></td>



                    <td>

                        <a href="editando.php?id=<?php echo $dados['id'];?>" name="bt_editar">Editar</a> |
                        <a href="excluir.php?id=<?php echo $dados['id'];?>" name="bt_excluir">Excluir</a>

                        <?php

                        ?>
                    </td>
                </tr>
            <?php }?>



        </table>
        <p>
        <form name="sigup" method="post" action="cadastro.php">
            <input type="submit" value="Nova Descrição" class="btn btn-xs btn-primary classAdd"  />
        </form>

    </div>
</div>

</body>
</html>