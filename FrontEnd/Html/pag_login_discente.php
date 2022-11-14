<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Login</title>
  </head>
  <body class="bgImage">
  <div class="alert"></div>
    <section class="container-fluid text-center alinhamento">
      <div class="row tamcontainer">
        <div
          class="col-lg-5 bg-primary align-items-center controlScreenLogin paddingPagesUp"
        >
          <p class="fontTextLeftHeader fontSizeHeader paddingItens">
            Faça Login
          </p>
          <p class="fontTextLeftBody fontSizeBody paddingItens">
            Por favor, preencha os campos de matrícula <br />
            e senha corretamente, se por acaso você <br />
            tenha esquecido sua senha, clique na opção<br />
            logo abaixo "Esqueceu sua senha?".
          </p>
          <a
            class="btn btnInf btn-outline-light btnSize paddingPagesDown"
            href="recuperar_senha_discente.php"
          >
            Esqueceu sua senha?
          </a>
        </div>
        <div class="col-lg bg-white Login paddingPagesUp">
          <p class="colorParag fontSizeBody paddingItens">
            Acesse o MyFreq aqui:
          </p>
          <form action = "pag_login_discente.php" method="POST">
              <div style="width: 23rem" class="input-group input-group-sm mb-4 m-auto">
                  <span class="input-group-text bg-primary text-white" id="basic-addon1">Matrícula:</span>
                  <input name = "matricula" type="text" class="form-control" placeholder="Digite sua matrícula!" aria-label="UserEmail" aria-describedby="basic-addon1"/>
              </div>
              <div style="width: 23rem" class="input-group input-group-sm m-auto">
                <span style="height: 2rem" class="input-group-text bg-primary text-white" id="basic-addon1">Senha:</span>
                <input name = "senha" style="height: 2rem" type="password" class="form-control" placeholder="Digite sua senha!" aria-label="UserSenha" aria-describedby="basic-addon1"/>
            </div>
              <input type="submit" name="enviar" value="Entrar" class="btn btnLogin btn-outline-primary btnSize mt-4 paddingPagesDown"/>
          </form>
          <?php
              require_once("../../BackEnd/Services/loginDiscente.php");
              if(isset($_POST['enviar']) && isset($_POST['matricula']) && isset($_POST['senha']))
              {
                $matricula=$_POST['matricula'];
                $senha=$_POST['senha'];
                if(strlen($matricula)>0 && strlen($senha))
                {
                  efetuarLogin($matricula,$senha);
                }
                else{
                  campoVazio();
                }
              }
          ?>
        </div>
      </div>
    </section>
    <!--Adicionando script Bootstrap-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/script.js"></script>
  </body>
</html>