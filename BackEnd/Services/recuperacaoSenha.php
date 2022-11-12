<?php
    function alterarSenha($email)
    {
        include_once("..\Connection\connection.php");
        $email=$mysqli->escape_string($email);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $erro[]="Email inválido";
            foreach($erro as $msg)
            {
                echo "$msg";
            }
        }
        else{
            $sql="SELECT siepe FROM professor WHERE email='$email'";
            $execut=$mysqli->query($sql) or die($mysqli->error);
            $dado=$execut->fetch_assoc();
            $total=$execut->num_rows;
            if($total>0)
            {
                $novaseha=md5(time());
                if(mail($email,"Recuperação de senha","Sua nova senha é: ".$novaseha))
                {
                    $sql_code="UPDATE professor SET senha='$novaseha' WHERE email='$email'";
                    $sql_query=$mysqli->query($sql_code) or die($mysqli->error);
                    echo "Sucesso";
                }
            }
            else{
                $erro[]="Email não cadastrado";
                foreach($erro as $msg)
                {
                    echo "$msg";
                }
            }
        }
    }
?>