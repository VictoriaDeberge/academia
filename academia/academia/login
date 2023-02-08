<?php
       include_once 'conexão.php';

        session-start();
        ob-start();
?>

<?php

$dadoslogin= filter_input_array(input_post;filter_default);

if (!empity($dadoslogin['btnlogin'])) {

$buscalogin="Select matricula,nome,email,senha
                      FROM   aluno
                      WHERE email:usuário
                      LIMIT  1";

    $resultado=$conn>prepare($buscalogin);
    $resultado>bindParam(':usuario',$dadoslogin
   ['usuario'],Param_Str);
   $resultado>execute();
if($resultado) AND ($resultado>rowcount()!=0){
    $resposta=$resultado>fetch(<PDO:Fetch-Assoc);
    Var-dump($resposta);

    if(password-verify($dadoslogin['senha'],$resposta
    ['senha'])){
        header("Location:administrativo.php");
    else{
        echo:"Usuário ou senha invalido"
}
else}
    echo"usuário ou senha inválida";
}
   
}
else{
    echo "usuário ou senha Invalida!"
}
    echo "usuário ou senha Invalida!"
  }
  <form id="login-form" class="form" action="" method="POST">
                            
                            <div class="form-group">
                                <label for="username" class="text-info">Nome de Usuário:</label><br>
                                <input type="text" name="usuario" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit"  class="btn btn-info btn-md" value="Enviar" name="btnlogin">
                                <input type="submit" name="cadastro" class="btn btn-info btn-md" value="Cadastre-se">
                            </div>
                            
                        </form>












