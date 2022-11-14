<?php
    include_once("alertas.php");
    function efetuarLogin($siepe,$password)
    {
        require_once('conexao.php');
        $siepe=$mysqli->escape_string($siepe);
        $password=$mysqli->escape_string($password);
        $sql="SELECT * FROM professor WHERE siepe='$siepe'";
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