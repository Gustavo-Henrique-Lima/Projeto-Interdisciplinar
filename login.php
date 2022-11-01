<?php
    include_once("conTestes.php");
    include_once("BackEnd\Entities\Usuario.php");
    if(isset($_POST['login']) || isset($_POST['senha']))
    {
        if(strlen($_POST['login']==0))
        {
            echo"Preencha sua matrícula";
        }else if(strlen($_POST['senha']==0))
        {
            echo"Preencha sua senha";
        }
        else{
            $login=$mysqli->real_escape_string($_POST['login']);
            $senha=$mysqli->real_escape_string($_POST['senha']);
            $sql_code="SELECT * FROM professor WHERE siepe='$login' AND senha='$senha'";
            $sql_query=$mysqli->query($sql_code) or die("Erro, tente novamente");
            if($sql_query->num_rows==1)
            {
                $usuario=$sql_query->fetch_assoc();
                if(!isset($_SESSION))
                {
                    session_start();
                }
                $_SESSION['usuario']=$usuario['nome'];
                $_SESSION['mat']=$usuario['siepe'];
                header("Location: telaInicial.php");
            }
            else{
                echo "Usuário e/ou senha inválidos!";
            }
        }
    }
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q-IFPE</title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label>
                Matrícula
            </label>
            <input type="text" name="login">
        </p>
        <p>
            <label>
                Senha
            </label>
            <input type="password" name="senha">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>