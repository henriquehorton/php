<?php 
session_start();
include 'menu.php';
include 'mask.html';
?>
<script type="text/javascript">

    
    function confirmacao(){
	alert ("<?php echo $_SESSION['msn'] ?> ")
    }
    </script>

<body>
    <main role="main" class="container">
      <div class="jumbotron">      
      <div class="py-5 text-center">
          <?php if(isset($_SESSION['msn'])){?>                
              <script>confirmacao()</script><?php
              unset ($_SESSION['msn']);        
          }?>
          <img class="d-block mx-auto mb-4" src="https://2.bp.blogspot.com/-M48lhxZh5q8/Vwf2k_AEISI/AAAAAAAADD4/PQoHN0MAF2sUFKN39srMZKwMOIelxgcmQ/s320/palmeiraslogo.png" alt="" width="200" height="200">
          <h2>Formulário de Teste</h2>
          <p class="lead">Formulário para testar cohecimentos</p>
          <p class="lead">Carlos Horton</p>
      </div>
      </div>
</body>
     
    </main>