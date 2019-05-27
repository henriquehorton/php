<?php
$conexao = mysqli_connect("localhost", "root","","test");
$dados = mysqli_query($conexao, "SELECT * FROM responsaveis WHERE idresponsaveis ='{$_GET['idresponsaveis']}'");
$produto = mysqli_fetch_array($dados);
$excluido = $produto['nome'];
?>
<?php
$conexao = mysqli_connect("localhost", "root","","test");
$idexckuir = $_GET["idresponsaveis"];
$sql = "DELETE FROM responsaveis WHERE idresponsaveis ='{$_GET['idresponsaveis']}'";
$result = mysqli_query($conexao,$sql);      
header('Location:lista_de_user.php');
?>
