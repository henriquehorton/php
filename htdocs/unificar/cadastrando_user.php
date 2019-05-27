<?php 
    session_start();
   
    $data = $_SESSION['data'];
    $categoria = $_SESSION['categoria'];
    $cpf = $_SESSION['cpf'];
    $nome = $_SESSION['usuario'];

    if(!empty($nome)){
        include_once('conexao.php');
        $sql = "INSERT INTO cadastro (nome,data,categoria,cpf) 
        VALUES ('$nome','$data','$categoria','$cpf')";
            if (mysqli_query($conexao, $sql)) {
                $_SESSION['msn'] = "$nome" . " criada com sucesso!";
                header("location: index.php");
                
                
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
            }
        mysqli_close($conexao);
        unset ($_SESSION['usuario']);

    }else{
        echo "Página não encontrada";
        header("location: index.php");
        
    }
      
    
?>