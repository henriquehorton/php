<?php
session_start();
?>
<?php
$conexao = mysqli_connect("localhost", "root","","anglo");
$dados = mysqli_query($conexao, "SELECT * FROM tarefas WHERE id ='{$_GET['id']}'");
$produto = mysqli_fetch_array($dados);
$ideditar = $_GET['id'];
$carregarid = "$ideditar";
$_SESSION['carregarid'] = $carregarid;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TESTE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <table border="1">
<div class="container">
    <div class="table_tarefas">
        <h1 class="page-header">Editar</h1>

        <form name="sigup" method="post" action="editar.php">
            <input type="text" name="editando"/>
            <input type="submit" value="Atualizar" class="btn btn-xs btn-primary classAdd"/>
        </form>

    </div>
</div>
    </table>

</body>
</html>