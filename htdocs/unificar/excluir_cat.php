<?php
include 'conexao.php';
include 'menu.php';
$sql = "DELETE FROM categoria WHERE idcategoria ='{$_GET['idcategoria']}'";
$result = mysqli_query($conexao,$sql);
header("location: listar_cat.php");
?>

