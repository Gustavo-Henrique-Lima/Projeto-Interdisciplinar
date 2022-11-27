<?php
    include_once("alertas.php");
    function efetuarLogin($siepe,$password)
    {
        include_once("conexao.php");
        $siepe=$mysqli->escape_string($siepe);
        $password=$mysqli->escape_string($password);
        $sql="SELECT * FROM professor WHERE siepe='$siepe'";
        $execut=$mysqli->query($sql) or die($mysqli->error);
        $dado=$execut->fetch_array();
        $total=$execut->num_rows;
        if($total>0)
        {
            include_once("../../BackEnd/Entities/Docente.php");
            if(password_verify($password,$dado["senha"]))
            {
                $professor=new Docente($dado["siepe"],$dado["nome"],$dado["sobrenome"],$dado["ultimonome"],$dado["email"],$dado["senha"],$dado["PATH"]);
                if(!isset($_SESSION))
                {
                    session_start();
                }
                $_SESSION['nome']=$professor->getNome();
                $_SESSION['foto']=$professor->getFoto();
                $_SESSION['matricula']=$professor->getSiepe();
                $_SESSION['email']=$professor->getEmail();
                header("Location: criar_estagio.php");
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