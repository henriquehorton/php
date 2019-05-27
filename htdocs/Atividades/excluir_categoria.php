<?php
$conexao = mysqli_connect("localhost", "root","","test");
$dados = mysqli_query($conexao, "SELECT * FROM responsaveis WHERE idcategoria ='{$_GET['idcategoria']}'");
$produto = mysqli_fetch_array($dados);
$excluido = $produto['nomedescricao_categoria'];
?>
<?php
$conexao = mysqli_connect("localhost", "root","","test");
$idexckuir = $_GET["idcategoria"];
$sql = "DELETE FROM categoria WHERE idcategoria ='{$_GET['idcategoria']}'";
$result = mysqli_query($conexao,$sql);      
header('Location:lista_de_categoria.php');
?>
