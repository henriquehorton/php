<?php
session_start();
include 'conexao.php';

$btn_cadastrar = filter_input(INPUT_POST, 'btn_cadastrar', FILTER_SANITIZE_STRING);

if($btn_cadastrar){
    
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);    

    if(!empty($categoria)){
        $result_cat = "SELECT * FROM categoria WHERE descricao_categoria='$categoria' LIMIT 1";
        $resultado_cat = mysqli_query($conexao,$result_cat);
        $busca = mysqli_fetch_array($resultado_cat);
        $cat_retornado = $busca['descricao_categoria'];
        
        if(empty($cat_retornado)){
            $_SESSION['categoria'] = $categoria;
            header("location: cadastrando_cat.php");

        }else{
            $_SESSION['msn'] = "Categoria já cadastrado";
            header("location: cadastro_cat.php"); 
        }

    }else{
        $_SESSION['msn'] = "Digite todos Campos obrigatorios";
        header("location: cadastro_cat.php"); 
    }
      
}else{
    
    $_SESSION['msn'] = "Página não encontrada";
    header("location: index.php"); 
}

?>
