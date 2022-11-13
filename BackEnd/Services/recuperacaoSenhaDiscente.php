<?php
    function alterarSenha($email)
    {
        require_once('conexao.php');
        $email=$mysqli->escape_string($email);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo("
                <script>
                    const msg = 'E-mail inválido';
                    const divMessage = document.querySelector('.alert');
                    const message = document.createElement('p');
                    message.classList.add('message');
                    message.innerText = msg;
                    divMessage.appendChild(message);
                    setTimeout(() => 
                    {
                        message.style.display = 'none';
                    }, 3000);
            </script>");
        }
        else{
            $sql="SELECT nome FROM aluno WHERE email='$email'";
            $execut=$mysqli->query($sql) or die($mysqli->error);
            $dado=$execut->fetch_array();
            $total=$execut->num_rows;
            if($total>0)
            {
                $senhaEmail=time();
                $novasenha=password_hash($senhaEmail,PASSWORD_DEFAULT);
                if(mail($email,"Redefinição de senha","Olá ".$dado["nome"]. ", sua senha foi alterada com sucesso, utilize a seguinte senha para acessar o MyFreq: ".$senhaEmail."\n Recomendamos que você acesse o MyFreq procure por redefinir senha e redefina a sua senha."))
                {
                    $sql_code="UPDATE aluno SET senha='$novasenha' WHERE email='$email'";
                    $sql_query=$mysqli->query($sql_code) or die($mysqli->error);
                    echo("
                    <script>
                        const msg = 'Sucesso, por favor confira o seu e-mail!';
                        const divMessage = document.querySelector('.alert');
                        const message = document.createElement('p');
                        message.classList.add('message');
                        message.innerText = msg;
                        divMessage.appendChild(message);
                        setTimeout(() => 
                        {
                            message.style.display = 'none';
                        }, 3000);
                    </script>");
                }
            }
            else{
                echo("
                <script>
                    const msg = 'E-mail não cadastrado';
                    const divMessage = document.querySelector('.alert');
                    const message = document.createElement('p');
                    message.classList.add('message');
                    message.innerText = msg;
                    divMessage.appendChild(message);
                    setTimeout(() => 
                    {
                        message.style.display = 'none';
                    }, 3000);
                </script>");
            }
        }
    }
    function campoVazio()
    {
        echo("
        <script>
            const msg = 'Preencha todos os campos';
            const divMessage = document.querySelector('.alert');
            const message = document.createElement('p');
            message.classList.add('message');
            message.innerText = msg;
            divMessage.appendChild(message);
            setTimeout(() => 
            {
                message.style.display = 'none';
              }, 3000);
        </script>");
    }
?>