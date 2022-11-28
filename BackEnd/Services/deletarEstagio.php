<?php
    include_once("alertas.php");
    function apagarEstagio($matriculaAluno,$inicio,$local)
    {
        include_once("conexao.php");
        $matriculaAluno=$mysqli->escape_string($matriculaAluno);
        $local=$mysqli->escape_string($local);
        $sql="SELECT * FROM estagio WHERE matricula_aluno='$matriculaAluno' AND inicio='$inicio' AND lugar='$local'";
        $execut=$mysqli->query($sql) or die($mysqli->error);
        $total=$execut->num_rows;
        if($total>0)
        {
            $sql="DELETE FROM estagio WHERE matricula_aluno='$matriculaAluno' AND inicio='$inicio' AND lugar='$local'";
            $execut=$mysqli->query($sql) or die($mysqli->error);
            if($execut)
            {
                deletarEstagio();
            }
        }
        else{
            estagioNaoEncontrado();
        }
    }
?>