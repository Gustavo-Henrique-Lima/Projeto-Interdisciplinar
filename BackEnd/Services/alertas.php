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
    function cadastrouEstagio()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Sucesso!',
                  text: 'O estágio foi cadastrado com sucesso na nossa base de dados.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }
    function erroCadastrarEstagio()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Ou você digitou uma matrícula inválida ou o aluno já possui estágio marcado para essa mesma data e hora, tente uma nova data.',
                  showConfirmButton: true,
                  timer: 40000
                  })
            </script>";
    }
    function senhaAlteradaComSucesso()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Sucesso!',
                  text: 'Sua senha foi alterada com sucesso.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }
    function erroAoAlterarSenha()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Não conseguimos alterar sua senha, mas não se preocupe, o erro foi nosso, tente novamente mais tarde.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }
    function deletarEstagio()
    {
       echo "<script type='text/javascript'>
                Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Estágio excluido com sucesso.',
                        showConfirmButton: true,
                        timer: 4000
                })
        </script>";
    }
    function estagioNaoEncontrado()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Não conseguimos localizar nenhum estágio com as informações inseridas, tente novamente.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }
    function estagioAtualizadoComSucesso()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Sucesso!',
                  text: 'O estágio foi atualizado com sucesso.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }
    function error404()
    {
        echo "<script type='text/javascript'>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Não conseguimos atualizar o estágio, mas não se preocupe, o erro foi nosso, tente novamente mais tarde.',
                  showConfirmButton: true,
                  timer: 4000
                  })
            </script>";
    }

    function showModel(){
        echo "<script type='text/javascript'>
       const element = document.querySelector('.form');
       element.style.display = 'none';
       const spinnerElement = document.querySelector('.alert');
       spinnerElement.style.display = 'hidden';
    </script>";
    }

    function unshowModel(){
        echo "<script type='text/javascript'>
       const element = document.querySelector('.form');
       element.style.display = 'hidden';
       const spinnerElement = document.querySelector('.alert');
       spinnerElement.style.display = 'none';
    </script>";
    }
?>