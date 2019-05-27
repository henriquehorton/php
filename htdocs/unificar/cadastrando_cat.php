<?php 
    session_start();
   
    $categoria = $_SESSION['categoria'];

    if(!empty($categoria)){
        include_once('conexao.php');
        $sql = "INSERT INTO categoria (descricao_categoria) 
        VALUES ('$categoria')";
            if (mysqli_query($conexao, $sql)) {
                $_SESSION['msn'] = "$categoria" . " criada com sucesso!";
                header("location: index.php");
                
                
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
            }
        mysqli_close($conexao);
        unset ($_SESSION['categoria']);

    }else{
        echo "Página não encontrada";
        header("location: index.php");
        
    }
      
    
?>