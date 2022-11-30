<?php
    include_once("../../BackEnd/Services/protect.php");
    include_once("../../BackEnd/Services/conexao.php");
    $matricula=$_POST['numeroDaMatricula'];
    $matricula=$mysqli->escape_string($matricula);
    $data=$_POST['dataEstágio'];
    $sql="SELECT estagio.lugar,estagio.descricao,estagio.inicio,aluno.nome,aluno.matricula,estagio.presenca
    FROM estagio 
    INNER JOIN aluno ON estagio.matricula_aluno=aluno.matricula
    WHERE aluno.matricula='$matricula' AND estagio.inicio='$data';";
    $execut=$mysqli->query($sql) or die($mysqli->error);
    $dados=mysqli_fetch_assoc($execut);
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
    <section class="container mt-5">
      <div class="row my-2 mx-1 py-2 border rounded">
        <div class="col-12">
          <form action="atualizando.php" method="POST">
            <div class="row">
              <div class="col-12 mt-3">
                <h2>Atualizar Estágio</h2>
              </div>
              <p class="text-center text-primary pt-5">
                Por favor, apenas atualize os campos que você deseja alterar,
                sendo assim não será necessário modificar todos eles. Obs.: Não
                esqueça de clicar no botão “Atualizar” para confirmar a
                alteração.
              </p>
            </div>
            <div class="row g-3">
            <div class="col-12">
              <?php
                if(is_null($dados))
                {
                  $mat="Não foi encontrado nenhum estágio com as informações inseridas";
                  $dataAntiga="Não foi encontrado nenhum estágio com as informações inseridas";
                  $local="Não foi encontrado nenhum estágio com as informações inseridas";
                  $descricao="Não foi encontrado nenhum estágio com as informações inseridas";
                }
                else{
                  $mat=$dados['matricula'];
                  $dataAntiga=$dados['inicio'];
                  $local=$dados['lugar'];
                  $descricao=$dados['descricao'];
                }
              ?>
                <input
                  type="hidden"
                  type="text"
                  name="matricula"
                  id="matricula"
                  class="form-control"
                  value="<?php echo $mat?>"
                />
              </div>
              <div class="col-12">
                <input
                  type="hidden"
                  type="text"
                  name="dataantiga"
                  id="dataantiga"
                  class="form-control"
                  value="<?php echo $dataAntiga?>"
                />
              </div>
              <div class="col-12">
                <label for="localEstagio" class="form-label"
                  >Local do Estágio</label
                >
                <input
                  type="text"
                  name="localEstagio"
                  id="localEstagio"
                  class="form-control"
                  value="<?php echo $local?>"
                />
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
                  value="<?php echo $dados['inicio']?>"
                />
                <label for="nomeEvento" class="form-label"
                  >Descrição do Estágio</label
                >
                <textarea
                  type="text"
                  name="DescricaoDoEstagio"
                  id="nomeEvento"
                  class="form-control"
                ><?php echo $descricao?></textarea>
                <p class="text-center text-primary mt-3">
                  A opção de frequência do aluno(a) fica logo abaixo.
                </p>
                <span>Formulário</span>
               
                <div class="ms-3">
                <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      value="Não Alterar"
                      checked
                    />Não Alterar
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      value="Faltou"
                    />Faltou
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      id="FreqCheck2"
                      value="Presente"
                    />Presente
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      value="Falta justificada"
                    />Falta justificada
                  </div>
                </div>
              </div>
              <div class="col-6">
                <a
                  href="atualizar_estagio.php"
                  class="btn btn-danger w-100 text-white"
                  >Cancelar</a
                >
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 text-white" name="enviar">
                  Atualizar
                </button>
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