<?php
    include("../../BackEnd/Services/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
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
      <a class="navbar-brand fontTextLeftHeader ms-1" href="discente_inicio.php">MyFreq</a>
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
                href="discente_inicio.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../../BackEnd/Services/logout.php"
                >Sair</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section style="width: 50rem" class="container mt-5 sombra pt-3">
      <h3 class="text-primary mb-5">Meu perfil</h3>
      <div class="fotoPerfil bg-primary mx-auto d-block">
        <img width="100%" class="fotoPerfil" src="../../<?php echo $_SESSION['foto'];?>" alt="" />
      </div>
      <div class="container bg-primary mt-3 text-center text-white pt-2 pb-2">
        <h4><?php echo $_SESSION['nome'];?></h4>
      </div>
      <div class="container bg-white pb-4 ps-0">
        <div class="mt-5 text-primary">
          <span class="h4">Email:</span>
          <span class="h5"><?php echo $_SESSION['email'];?></span>
        </div>
        <div class="mt-2 text-primary">
          <span class="h4">Matrícula:</span>
          <span class="h5"><?php echo $_SESSION['matricula'];?></span>
        </div>
        <div class="text-center mt-5">
          <span class="text-primary"
            >Por favor, caso você deseje modificar sua senha clique no botão
            logo abaixo "Alterar Senha".</span
          >
          <div class="mt-4" action="">
            <a
              href="alterar_senha_discente.php"
              class="btn btnLogin btn-outline-primary"
            >
              Alterar Senha
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--Adicionando Bootstrap Js-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/meuScript.js"></script>
  </body>
</html>