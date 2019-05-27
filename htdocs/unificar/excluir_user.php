<?php
include 'conexao.php';
include 'menu.php';
$idexckuir = $_GET["id"];
$sql = "DELETE FROM cadastro WHERE id ='{$_GET['id']}'";
$result = mysqli_query($conexao,$sql);
header("location: listar_user.php");
?>

