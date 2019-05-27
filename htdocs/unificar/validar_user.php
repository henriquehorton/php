<?php
session_start();
include 'conexao.php';

$btn_cadastrar = filter_input(INPUT_POST, 'btn_cadastrar', FILTER_SANITIZE_STRING);

if($btn_cadastrar){
    
    $nome = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);    
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING); 
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING); 
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $cpf = str_replace("." , "" , $cpf ); // Primeiro tira os pontos
    $cpf = str_replace("-" , "" , $cpf); // Depois tira a vírgula

    if(!empty($cpf)){
        $result_cpf = "SELECT * FROM cadastro WHERE cpf='$cpf' LIMIT 1";
        $resultado_cpf = mysqli_query($conexao,$result_cpf);
        $busca = mysqli_fetch_array($resultado_cpf);
        $cpf_retornado = $busca['cpf'];
        
        if(empty($cpf_retornado)){
            $_SESSION['usuario'] = $nome;
            $_SESSION['data'] = $data;
            $_SESSION['categoria'] = $categoria;
            $_SESSION['cpf'] = $cpf;
            header("location: cadastrando_user.php");

        }else{
            $_SESSION['msn'] = "CPF já cadastrado";
            header("location: cadastro_user.php"); 
        }

    }else{
        $_SESSION['msn'] = "Digite todos Campos obrigatorios";
        header("location: cadastro_user.php"); 
    }
      
}else{
    
    $_SESSION['msn'] = "Página não encontrada";
    header("location: index.php"); 
}

?>
