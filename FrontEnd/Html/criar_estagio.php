<?php
    include("../../BackEnd/Services/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../myScript/sweetAlert.js"></script>
    <!-- Botstrap css -->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Css Local-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <title>Criar Estágio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand fontTextLeftHeader ms-1" href="criar_estagio.php"
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
                href="criar_estagio.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="perfil_usuario_docente.php"
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
          <form action="" method="POST">
            <div class="row">
              <div>
                <ul class="nav nav-pills nav-fill">
                  <li class="nav-item">
                    <a class="nav-link active" href="criar_estagio.php"
                      >Criar Estágio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="atualizar_estagio.php"
                      >Atualizar Estágio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesquisar_estagio.php">Pesquisar Estágio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="remover_estagio.php">Remover Estágio</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 mt-3">
                <h2>Novo Estágio</h2>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                <label for="numeroDaMatricula" class="form-label"
                  >Número da Matrícula do aluno(a)</label
                >
                <input
                  type="text"
                  name="numeroDaMatricula"
                  id="numeroDaMatricula"
                  class="form-control"
                />
                <label for="localEstagio" class="form-label"
                  >Local do Estágio</label
                >
                <input
                  type="text"
                  name="localEstagio"
                  id="localEstagio"
                  class="form-control"
                />
                <label for="nomeEvento" class="form-label"
                  >Descrição do Estágio</label
                >
                <textarea
                  type="text"
                  name="DescricaoDoEstagio"
                  id="nomeEvento"
                  class="form-control"
                ></textarea>
              </div>
              <div class="col-12">
                <label for="dataEstagio" class="form-label"
                  >Data e Hora do Estágio</label
                >
                <input
                  type="datetime-local"
                  name="dataEstágio"
                  id="dataEstágio"
                  class="form-control"
                />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success w-100 text-white" name="enviar">
                  Salvar
                </button>
              </div>
            </div>
          </form>
           <?php
            require_once("../../BackEnd/Services/cadastrarEstagio.php");
            if(isset($_POST['enviar']) && isset($_POST['numeroDaMatricula']) && isset($_POST['localEstagio']) && isset($_POST['DescricaoDoEstagio'])&& isset($_POST['dataEstágio']))
            {
              $matricula=$_POST['numeroDaMatricula'];
              $local=$_POST['localEstagio'];
              $descricao=$_POST['DescricaoDoEstagio'];
              $inicio=$_POST['dataEstágio'];
              if(strlen($matricula)<1 || strlen($local)<1 || strlen($descricao)<1 || strlen($inicio)<1)
              {
                echo '<p style="color:red">Preencha todos os campos.</p>';
              }
              else{
                cadastrarEstagio($matricula,$inicio,$descricao,$local);
              }
              
            }
          ?>
        </div>
      </div>
    </section>
    <!--Adicionando Bootstrap Js-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/meuScript.js"></script>
  </body>
</html>