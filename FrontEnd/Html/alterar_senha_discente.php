<?php
    include("../../BackEnd/Services/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alterar Senha</title>
    <!-- Botstrap css -->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Css Local-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand fontTextLeftHeader ms-1" href="#">MyFreq</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="position-absolute top-1 end-0">
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="calendariodiscente.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="perfil_usuario_discente.php"
                >Perfil</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section style="width: 30rem" class="container mt-5 sombra pt-3">
      <h3 class="text-primary mb-5">Alterar Senha</h3>
      <div class="fotoPerfil bg-primary mx-auto d-block">
        <img width="100%" class="fotoPerfil" src="../../<?php echo $_SESSION['foto'];?>" alt="" />
      </div>
      <div class="container bg-primary mt-3 text-center text-white pt-1 pb-1">
        <h5><?php echo $_SESSION['nome'];?></h5>
      </div>
      <form class="mt-5 text-center" action="" method="">
        <div
          style="width: 23rem"
          class="input-group input-group-sm mb-4 m-auto"
        >
          <span class="input-group-text bg-primary text-white" id="basic-addon1"
            >Senha Antiga:</span
          >
          <input
            name="matricula"
            type="password"
            class="form-control"
            placeholder="Digite sua senha antiga aqui!"
            aria-label="UserOldPass"
            aria-describedby="basic-addon1"
          />
        </div>

        <div style="width: 23rem" class="input-group input-group-sm m-auto">
          <span
            style="height: 2rem"
            class="input-group-text bg-primary text-white"
            id="basic-addon1"
            >&nbsp;Nova Senha:&nbsp;</span
          >
          <input
            name="nova_senha"
            style="height: 2rem"
            type="password"
            class="form-control"
            placeholder="Digite sua nova senha aqui!"
            aria-label="UserNewPass"
            aria-describedby="basic-addon1"
          />
        </div>
        <br />
        <span style="font-size: 0.7rem" class="h7 text-primary"
          >Por favor, para confirmar a alteração clique no botão logo abaixo
          "Alterar Senha".</span
        ><br />
        <button
          type="submit"
          value="enviar"
          class="btn btnLogin btn-outline-primary btnSize mt-4 mb-4"
        >
          Alterar Senha
        </button>
      </form>
    </section>
  </body>
</html>
