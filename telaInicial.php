<?php
   include("services.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    Bem-vindo, <?php echo $_SESSION['usuario'];?>
    <a href="logout.php">Sair</a>
</body>
</html>