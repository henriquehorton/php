<?php
include 'conexao.php';
session_start();
$vid = $_SESSION['id'];
$vname =  $_POST["usuario"];
$vcategoria =  $_POST["categoria"];
$vcpf =  $_POST["cpf"];
$vdata = $_POST["data"];


if(empty($vid)){

        $_SESSION['msn'] = $vid;
        header ("location:index.php");
}else{

        $sql = "UPDATE cadastro SET 
                CPF='$vcpf', 
                NOME='$vname', 
                DATA='$vdata', 
                CATEGORIA='$vcategoria' 
                WHERE id ='{$vid}'";
        $result = mysqli_query($conexao,$sql);   
        unset ($_SESSION['id']);
        $_SESSION['msn'] = "Alteração feita com sucesso!";
        header ("location:index.php");
}
?>