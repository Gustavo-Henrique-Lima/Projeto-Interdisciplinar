<?php
    include_once("alertas.php");
    function cadastrarEstagio($matriculaAluno,$inicio,$descricao,$local)
    {
        include_once("conexao.php");
        $matriculaAluno=$mysqli->escape_string($matriculaAluno);
        $descricao=$mysqli->escape_string($descricao);
        $local=$mysqli->escape_string($local);
        $sql="INSERT INTO estagio (matricula_aluno,inicio,descricao,lugar,presenca) VALUES ('$matriculaAluno','$inicio','$descricao','$local',null)";
        try{
            $execut=$mysqli->query($sql) or die($mysqli->error);
            cadastrouEstagio();
        }
        catch(Exception $e)
        {
            erroCadastrarEstagio();
        }
    }
?>