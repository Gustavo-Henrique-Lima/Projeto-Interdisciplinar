<?php
    include("../../BackEnd/Services/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Botstrap css -->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Css Local-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <title>Pesquisar Estágio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand fontTextLeftHeader ms-1" href="retorno_pesq_discente.php"
        >MyFreq</a
      >
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
                href="retorno_pesq_discente.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="perfil_usuario_discente.php"
                >Perfil</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../../BackEnd/Services/logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="container">
      <div class="row">
        <div class="col">
          <h1>Meus estágios</h1>
        </div>
      </div>
      <div class="row my-2 mx-1 py-2 border rounded">
        <div class="col-12">
          <form action="">
            <div class="row">
              <div class="col-12 mt-3">
                <h2>Informações do Estágio</h2>
              </div>
            </div>
            <div class="row g-3 mt-4">
              <div class="col-12">
                <table class="table table-white">
                  <thead>
                    <tr>
                      <th class="text-center" scope="col">#</th>
                      <th class="text-center" scope="col">Nome do Aluno(a)</th>
                      <th class="text-center" scope="col">
                        Número da Matrícula
                      </th>
                      <th class="text-center" scope="col">Local do Estágio</th>
                      <th class="text-center" scope="col">Data e Hora</th>
                      <th class="text-center" scope="col">Descrição</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td class="text-center">João Da silva</td>
                      <td class="text-center">2012ERBJ1239</td>
                      <td class="text-center">
                        Hospital Júlio Alves de Lira - Belo Jardim - PE
                      </td>
                      <td class="text-center">12/07/2022 20:00</td>
                      <td class="text-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Iure minima sequi distinctio facere accusamus
                        harum sint ullam voluptates voluptate voluptatibus.
                        Dicta dolore inventore autem. Omnis ad quo hic dolorem
                        assumenda!
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--Adicionando Bootstrap Js-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/meuScript.js"></script>
  </body>
</html>