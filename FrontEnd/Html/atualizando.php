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
    <section class="container mt-5">
      <div class="row my-2 mx-1 py-2 border rounded">
              <div class="col-12">
                    <a
                    href="atualizar_estagio.php"
                    class="btn btn-success w-100 text-white"
                    >Voltar</a
                    >
                </div>
          <?php
                include_once("../../BackEnd/Services/protect.php");
                include_once("../../BackEnd/Services/alertas.php");
                include_once("../../BackEnd/Services/atualizarEstagio.php");
                $matricula=$_POST['matricula'];
                if($_POST['matricula']!="Não foi encontrado nenhum estágio com as informações inseridas")
                {
                  $local=$_POST['localEstagio'];
                  $dataNova=$_POST['dataEstágio'];
                  $descricao=$_POST['DescricaoDoEstagio'];
                  $dataAntiga=$_POST['dataantiga'];
                  if($_POST['FreqCheck']!="Não Alterar")
                  {
                      $presenca=$_POST['FreqCheck'];
                      atualizarPresenca($matricula,$dataAntiga,$local,$dataNova,$descricao,$presenca);
                  }
                  else{
                      alterarDadosSemAlterarPresenca($matricula,$dataAntiga,$local,$dataNova,$descricao);
                  }
                }
                else{
                  error404();
                }
        ?>
      </div>
    </section>
    <!--Adicionando Bootstrap Js-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/meuScript.js"></script>
  </body>
</html>