<?php
session_start();
include_once('conexao.php');

$btn_enviar = filter_input(INPUT_POST, 'btn_enviar', FILTER_SANITIZE_STRING);

if ($btn_enviar){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    
    if(!empty($usuario)){
        $result_usuario = "SELECT * FROM usuario WHERE usuario='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conn,$result_usuario);
        $busca = mysqli_fetch_array($resultado_usuario);
        $usuario_retornado = $busca['usuario'];
        if(empty($usuario_retornado)){
            if (!is_numeric($usuario)) {
                $_SESSION['usuario'] = $usuario;
                header("location: cadastro.php"); 
                echo "tentativa";
            }else{
                $_SESSION['msn'] = "Apenas letras";
                header("location: index.php"); 
            }

        }
        else{
            $_SESSION['msn'] = "Nome Já Cadastrado!";
            header("location: index.php"); 
        }


    }else{
        $_SESSION['msn'] = "Campo (Nome) obrigatório!";
        header("location: index.php"); 
    }
}
else {
    $_SESSION['msn'] = "Página não encontrada!";
    header("location: index.php");
}

?>