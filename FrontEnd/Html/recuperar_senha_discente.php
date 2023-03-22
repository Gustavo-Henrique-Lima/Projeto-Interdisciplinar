<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recuperação de Senha</title>
    <script src="../myScript/sweetAlert.js"></script>
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <!--Adicionando Bootstrap-->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Adicionando Css-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Adicionando Favicon-->
  </head>
  <body class="bgImage">
  
    <section class="container-fluid text-center alinhamento">
      <div class="row tamcontainer">
        <div
          class="col-lg-5 bg-primary align-items-center controlScreenLogin paddingPagesUp"
        >
          <p class="fontTextLeftHeader fontSizeHeader paddingItens">
            Recuperar Senha
          </p>
          <p class="fontTextLeftBody fontSizeBody paddingItens">
            Por favor, nos informe o seu email de acesso ao MyFreq, logo em
            seguida lhe enviaremos algumas instruções para que você recupere sua
            senha.
          </p>
          <a
            class="btn btnInf btn-outline-light btnSize paddingPagesDown"
            href="pag_login_discente.php"
          >
            Voltar para o login
          </a>
        </div>
        <div class="col-lg bg-white Login paddingPagesUp">
          <div class="alert">
              <div class="spinner-border text-light" role="status">
                <span class="sr-only"></span>
              </div>
              <div>Enviando...</div>
          </div>
          <div class="form">
          <p class="colorParag fontSizeBody paddingItens">Informe seu email:</p>
          <div
            style="width: 22rem"
            class="input-group input-group-sm mb-4 m-auto"
          >
          <form id="formEmail" style="width: 22rem" class="input-group input-group-sm mb-4 m-auto" method="POST" action="recuperar_senha_discente.php">
            <span
              style="height: 2rem"
              class="input-group-text bg-primary text-white mt-4"
              id="basic-addon1"
              >Email:</span
            >
            <input
              style="height: 2rem"
              type="text"
              class="form-control mt-4"
              placeholder="Digite seu email!"
              aria-label="UserEmail"
              aria-describedby="basic-addon1"
              name="email"
            />
            <input type="submit" name="enviar" value="Enviar" class="btn btnLogin btn-outline-primary btnSize mt-4 paddingPagesDown" value="GO"/>
          </form>
            <?php
                    require_once("../../BackEnd/Services/recuperacaoSenhaDiscente.php");
                    if(isset($_POST['enviar']) && isset($_POST['email']))
                    {
                        $email=$_POST['email'];
                        if(strlen($email)>0)
                        {
                          alterarSenha($email);
                        }
                        else{
                          campoVazio();
                        }
                    }
            ?>
          </div>
         </div>
      </div>
    </section>
    <script src="../myScript/jquery-3.6.4.min.js"></script>
    <!--Adicionando script Bootstrap-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/script.js"></script>
    <script>
    $('#formEmail').submit(function(e) 
    {
      const element = document.querySelector('.form');
      element.style.display = 'none';
      const spinnerElement = document.querySelector('.alert');
      spinnerElement.style.display = 'block';
    });
  </script>
  </body>
</html>