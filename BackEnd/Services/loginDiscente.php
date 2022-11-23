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
            include_once("../../BackEnd/Entities/Discente.php");
            if(password_verify($password,$dado["senha"]))
            {
                $aluno=new Discente($dado["matricula"],$dado["email"],$dado["nome"],$dado["sobrenome"],$dado["ultimonome"],$dado["senha"],$dado["PATH"]);
                if(!isset($_SESSION))
                {
                    session_start();
                }
                $_SESSION['nome']=$aluno->getNome();
                $_SESSION['foto']=$aluno->getFoto();
                $_SESSION['matricula']=$aluno->getMatricula();
                $_SESSION['email']=$aluno->getEmail();
                header("Location: perfil_usuario_discente.php");
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