<?php 
    session_start();
    include 'menu.php';
    include 'conexao.php';
    $_SESSION['idcategoria'] = $_GET['idcategoria'];
    $select = "SELECT * FROM categoria WHERE idcategoria ='{$_GET['idcategoria']}'";
    $dados = mysqli_query($conexao,$select );
    $editar = mysqli_fetch_array($dados);
    $edit_cat = $editar['descricao_categoria'];   
?>

<body>
    <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Formulário</h4>
                <?php if(isset($_SESSION['msn'])){
                echo $_SESSION['msn'];
                unset ($_SESSION['msn']);        
                }
                ?>
            
            <form class="needs-validation" novalidate method="POST" action="editando_cat.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">Categoria</label>
                        <input type="text" class="form-control" value="<?php echo $edit_cat?>" id="cat" name="cat"  required autofocus>
                            <div class="invalid-feedback">
                            É obrigatório inserir uma categoria válido.
                            </div>
                    </div>
                </div>
                <div class="on bqr">
                <input class="btn btn-primary" name="btn_cadastrar" value="Salvar" type="submit">
                <a class="btn btn-danger"  href="listar_cat.php" role="button">Voltar</a>
                </div>
            </form>            
        </div>
    </div>    
    </main>

    
</body>    