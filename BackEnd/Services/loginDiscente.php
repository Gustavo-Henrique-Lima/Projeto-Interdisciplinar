<?php
    include_once("alertas.php");
    function efetuarLogin($matricula,$password)
    {
        require_once('conexao.php');
        $matricula=$mysqli->escape_string($matricula);
        $password=$mysqli->escape_string($password);
        $sql="SELECT * FROM aluno WHERE matricula='$matricula'";
        $execut=$mysqli->query($sql) or die($mysqli->error);
        $dado=$execut->fetch_array();
        $total=$execut->num_rows;
        if($total>0)
        {
            if(password_verify($password,$dado["senha"]))
            {
                echo "Bem-vindo ".$dado["nome"];
            }
            else{
                senhaInvalida();
            }
        }
        else{
            loginInvalido();
        }
    }
?>