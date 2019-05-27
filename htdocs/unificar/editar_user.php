<?php
session_start();
include 'conexao.php';
include 'menu.php';
include 'select_categoria.php';
include 'mask.html';

$_SESSION['id'] = $_GET['id'];
$select = "SELECT * FROM cadastro WHERE id ='{$_GET['id']}'";
$dados = mysqli_query($conexao,$select );
$editar = mysqli_fetch_array($dados);
$edit_nome = $editar['nome'];
$edit_data = $editar['data'];
$edit_cpf = $editar['cpf'];
$edit_categoria = $editar['categoria'];
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
                
                <form class="needs-validation" novalidate method="POST" action="editando_user.php" onsubmit="limparMascara()">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="primeiroNome">Nome</label>
                            <input type="text" class="form-control" value="<?php echo $edit_nome ?>" id="usuario" name="usuario" required placeholder=""  autofocus>
                                <div class="invalid-feedback">
                                É obrigatório inserir um nome válido.
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="primeiroNome">CPF</label>
                            <input type="text" class="form-control" value="<?php echo $edit_cpf ?>" id="cpf" name="cpf" placeholder="" required>
                                <div class="invalid-feedback">
                                É obrigatório inserir um cpf válido.
                                </div>
                        </div>
                    </div>             

                    

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="endereco2">Data <span class="text-muted">(Opcional)</span></label>
                            <input type="date" class="form-control" value="<?php echo $edit_data ?>" id="data" name="data" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="pais">Categoria</label>
                        <select class="custom-select d-block w-100" id="categoria" name="categoria" required >
                        <option value="<?php echo $edit_categoria ?>"><?php echo $edit_categoria ?></option>
                        <?php while ($dados = $consulta_cat->fetch_array()){ ?>
                        <option value="<?php echo $dados["descricao_categoria"]?>"><?php echo $dados["descricao_categoria"]?></option>
                        <?php }?>     
                        </select>
                            <div class="invalid-feedback">
                            Por favor, escolha um país válido.
                            </div>
                    </div>
                    </div>

                    <div class="on bqr">
                    <input class="btn btn-primary" name="btn_cadastrar" value="Salvar" type="submit">
                    <a class="btn btn-danger"  href="listar_user.php" role="button">Voltar</a>
                    </div>
                </form>            
            </div>
        </div>    
    </main>    
</body>    