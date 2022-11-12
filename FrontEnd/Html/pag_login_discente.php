
<!DOCTYPE html>
<html lang="en">
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
            logo abaixo "Recuperar Senha".
          </p>
          <a
            class="btn btnInf btn-outline-light btnSize paddingPagesDown"
            href="recuperar_senha.php"
          >
            Recuperar senha
          </a>
        </div>
        <div class="col-lg bg-white Login paddingPagesUp">
          <p class="colorParag fontSizeBody paddingItens">
            Acesse o MyFreq aqui:
          </p>
          <div
            style="width: 22rem"
            class="input-group input-group-sm mb-4 m-auto"
          >
            <span
              class="input-group-text bg-primary text-white"
              id="basic-addon1"
              >Matrícula:</span
            >
            <input
              type="text"
              class="form-control"
              placeholder="Digite sua matrícula!"
              aria-label="UserEmail"
              aria-describedby="basic-addon1"
            />
          </div>
          <div style="width: 22rem" class="input-group input-group-sm m-auto">
            <span
              class="input-group-text bg-primary text-white"
              id="basic-addon1"
              >Senha:</span
            >
            <input
              type="password"
              class="form-control"
              placeholder="Digite sua senha!"
              aria-label="UserSenha"
              aria-describedby="basic-addon1"
            />
          </div>
          <a
            class="btn btnLogin btn-outline-primary btnSize mt-4 paddingPagesDown"
            href=""
            >Entrar</a
          >
        </div>
      </div>
    </section>
    <!--Adicionando script Bootstrap-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/script.js"></script>
  </body>
</html>

