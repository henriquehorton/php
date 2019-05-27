<?php
include 'conexao.php';
session_start();
$vidcategoria = $_SESSION['idcategoria'];
$vcat =  $_POST["cat"];



if(empty($vidcategoria)){

        echo $vidcategoria;
        
}else{

        $sql = "UPDATE categoria SET 
                descricao_categoria ='$vcat'
                WHERE idcategoria ='{$vidcategoria}'";

        $result = mysqli_query($conexao,$sql);   
        unset ($_SESSION['idcategoria']);
        $_SESSION['msn'] = "Alteração feita com sucesso!";
        header ("location:index.php");
      

        
}
?>