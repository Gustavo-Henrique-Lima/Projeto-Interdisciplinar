<?php
    include_once("alertas.php");
     function alterarSenha($pass,$matricula)
     {
      include_once("conexao.php");
      $pass=$mysqli->escape_string($pass);
      $matricula=$mysqli->escape_string($matricula);
      $novasenha=password_hash($pass,PASSWORD_DEFAULT);
      $sql="UPDATE professor SET senha='$novasenha' WHERE siepe='$matricula'";
      $execut=$mysqli->query($sql) or die($mysqli->error);
      if($execut)
      {
            senhaAlteradaComSucesso();
      }
      else{
        erroAoAlterarSenha();
      }
     }
?>