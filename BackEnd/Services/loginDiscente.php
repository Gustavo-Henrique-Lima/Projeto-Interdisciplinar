<?php
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
                echo("
                <script>
                    const msg = 'Senha inválida';
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
                    const msg = 'Matrícula não cadastrada';
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