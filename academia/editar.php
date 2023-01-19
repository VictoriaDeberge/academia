<?php
require_once

 Session_start();
  ob_start();

    $id=filter_input filter_input(Input_Get,

if(empty($id)){}
  $_Session['msg']="Erro:Aluno não encontrado!";
  header("Location:relalunos.php");
  exit();
  }
  
  
  $Sql="Select*from Aluno shere matricula=$id Limit1";
  $conn->prepare($sql) ;
  $resultado->execute();

  if(($resultado) AND ($resultado->rowCount() != 0)){
      $linha = $resultado->fetch(PDO::FETCH_ASSOC);
      //var_dump($linha);
      extract($linha);
  }
  else{
      $_SESSION['msg'] = "Erro: Aluno não encontrado!";
      header("Location: relalunos.php");
  }


?>


<form method="POST" action="controlealuno.php">
  <div class="container">
      <div class="row">
              <div class="col-md-12 text-center">
                  <h3>Controle de Aluno</h3>
              </div>
      </div>

      <div class="row">

          <div class="col-md-1">
              <div class="form-group">
                  <label for="matricula">Matricula</label>
                  <input type="text" class="form-control" name="matricula"
                  value="<?php echo $matricula;?>"
                  >    
              </div>
          </div>   

          </div class=md-4>
          <div class=form-group>
          <label for=nome> >Nome</label>
  <input="text" <class-"form-control" name=nome
  value= <?php echo $nome;>
  >
    </div>
   </div>

   </div class="col-md-2">
   </



   

































