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
            <h1 class="page-header">Dados para tabela.</h1>
           
                <form action="" method="post">
                    <input type="text" name="caixatext" class="form-control f-name01"/>
                    <input type="submit" value="Inserir" name="botao" class="btn btn-xs btn-primary classAdd" >
                </form>
                <?php
                    if(isset($_POST["botao"])){
                    $vname = $_POST["caixatext"];
                    echo $vname;
                    echo "botão foi inserido";
                }?>
            
        </div>
    </div>

</body>
</html>