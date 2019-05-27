<?php 
    session_start();
    include 'menu.php';
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
            
            <form class="needs-validation" novalidate method="POST" action="validar_cat.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">Categoria*</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Digitar o nome" onkeyup="lettersonly(this)" required autofocus>
                            <div class="invalid-feedback">
                            É obrigatório inserir uma categoria válido.
                            </div>
                    </div>
                </div>
                <div class="on bqr">
                <input class="btn btn-primary" name="btn_cadastrar" value="Cadastrar" type="submit">
                <button  class="btn btn-danger" type="Reset">Limapar</button>
                </div>
            </form>            
        </div>
    </div>    
    </main>

    
</body>    