<?php
   
    function alterarDadosSemAlterarPresenca($matricula,$oldData,$local,$newData,$descricao)
    {
        include_once("alertas.php");
        include_once("conexao.php");
        $local=$mysqli->escape_string($local);
        $descricao=$mysqli->escape_string($descricao);
        $sql="UPDATE estagio SET lugar='$local',descricao='$descricao',inicio='$newData' WHERE matricula_aluno='$matricula' AND inicio='$oldData'";
        $execut=$mysqli->query($sql) or die($mysqli->error);
        if($execut)
        {
            estagioAtualizadoComSucesso();
        }
        else{
            error404();
        }
    }
    function atualizarPresenca($matricula,$oldData,$local,$newData,$descricao,$presenca)
    {
        include_once("alertas.php");
        include_once("conexao.php");
        $local=$mysqli->escape_string($local);
        $descricao=$mysqli->escape_string($descricao);
        $presenca=$mysqli->escape_string($presenca);
        $sql="UPDATE estagio SET lugar='$local',descricao='$descricao',inicio='$newData',presenca='$presenca' WHERE matricula_aluno='$matricula' AND inicio='$oldData'";
        $execut=$mysqli->query($sql) or die($mysqli->error);
        if($execut)
        {
            estagioAtualizadoComSucesso();
        }
        else{
            error404();
        }
    }

?>