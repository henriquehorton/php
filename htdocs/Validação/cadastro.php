<?php
session_start();

$cadastro = $_SESSION['usuario'];

if(!empty($cadastro)){
    include_once('conexao.php');
    
    $sql = "INSERT INTO usuario (usuario) VALUES ('$cadastro')";
        if (mysqli_query($conn, $sql)) {
            echo "Nome (" ,$_SESSION['usuario'],") criada com sucesso!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    mysqli_close($conn);
    unset ($_SESSION['usuario']);
    ?><br><a href="index.php">Voltar</a> <?php
    
}else{
    $_SESSION['msn'] = "Página não encontrada!";
    header("location: index.php");
}


?>