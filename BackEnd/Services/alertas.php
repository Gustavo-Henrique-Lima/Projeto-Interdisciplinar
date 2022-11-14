<?php
    function emailInvalido()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'O e-mail inválido, por favor tente novamente.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }

    function campoVazio()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Você esqueceu de preencher todos os campos, tente novamente.',
                  showConfirmButton: true,
                  timer: 40000
                  })
            </script>";
    }

    function enviouEmail()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Senha alterada com sucesso!',
                  text: 'Um e-mail foi enviado para você, por favor verifique o spam e o lixo eletrônico.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }

    function senhaInvalida()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Senha inválida, tente novamente.',
                  showConfirmButton: true,
                  timer: 40000
                  })
            </script>";
    }

    function loginInvalido()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'A matrícula ou siepe informado, é inválido, por favor tente novamente.',
                  showConfirmButton: true,
                  timer: 40000
                  })
            </script>";
    }
?>