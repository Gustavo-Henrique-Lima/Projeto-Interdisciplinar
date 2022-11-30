<?php
        include_once("conexao.php");
        $sql="SELECT estagio.lugar,estagio.descricao,estagio.inicio,aluno.nome,aluno.matricula,estagio.presenca
        FROM estagio 
        INNER JOIN aluno ON estagio.matricula_aluno=aluno.matricula
        WHERE estagio.inicio>=now();";
        $execut=$mysqli->query($sql) or die($mysqli->error);
?>