<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TESTE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="table_tarefas">
        <h1 class="page-header">Cadastrado.</h1>

        <?php
        $conexao = mysqli_connect("localhost", "root","","anglo");
        ?>
        <?php

        $campodescricao=$_POST['caixatext'];


        if (!$conexao) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $sql = "INSERT INTO tarefas (descricao) VALUES ('$campodescricao')";
    
        //Inserir na tabela tarefas e coluna descricao



        if (mysqli_query($conexao, $sql)) {
            echo "Descrição (" ,$campodescricao,") criada com sucesso!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        }
        mysqli_close($conexao);

        ?><br /><br /><?php

        ?>

        <form name="sigup" method="post" action="cadastro.php">
            <input type="submit" value="Nova Descrição" class="btn btn-xs btn-primary classAdd" />
        </form>
        <p>
        <form name="sigup" method="post" action="lista_cadastro.php">
            <input type="submit" value="Lista de cadastro" class="btn btn-xs btn-primary classAdd" />
        </form>


    </div>



</div>

</body>
</html>