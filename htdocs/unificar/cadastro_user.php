<?php 
    session_start();
    include 'menu.php';
    include 'select_categoria.php';
    include 'mask.html';
?>    
<body>
    <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Formulário</h4>
                <?php if(isset($_SESSION['msn'])){?>
                <a style=color:red> <?php echo $_SESSION['msn'];?> </a><?php
                unset ($_SESSION['msn']);        
                }
                ?>
            
            <form class="needs-validation" novalidate method="POST" action="validar_user.php" >
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">Nome</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o nome" onkeyup="lettersonly(this)" required autofocus >
                            <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required >
                            <div class="invalid-feedback">
                            É obrigatório inserir um cpf válido.
                            </div>
                    </div>
                </div>             

                

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="endereco2">Data <span class="text-muted">(Opcional)</span></label>
                        <input type="date" class="form-control" id="data" name="data" placeholder="" required>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="pais">Categoria</label>
                    <select class="custom-select d-block w-100" id="categoria" name="categoria" required >
                    <option value="">Escolha...</option>
                    <?php while ($dados = $consulta_cat->fetch_array()){ ?>
                    <option value="<?php echo $dados["descricao_categoria"]?>"><?php echo $dados["descricao_categoria"]?></option>
                    <?php }?>     
                    </select>
                        <div class="invalid-feedback">
                        Por favor, escolha uma categoria válido.
                        </div>
                </div>
                </div>

                <div class="on bqr">
                <input class="btn btn-primary" name="btn_cadastrar" value="Cadastrar" type="submit">
                <button  class="btn btn-danger" type="Reset">Limpar</button>
                </div>
            </form>
            
        </div>
    </div>    
    </main>

    
</body>    