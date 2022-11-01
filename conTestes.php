<?php
    //$banco = new PDO('mysql:host=localhost;dbname=projetointerdisciplinar', 'root','Mototaxi37264365')or print (mysql_error());
    $usuario="root";
    $senha="Mototaxi37264365";
    $database="projetointerdisciplinar";
    $host="localhost";
    $mysqli= new mysqli($host,$usuario,$senha,$database);
    if($mysqli->error)
    {
        die("Fala ao conectar ao banco de dados".$mysqli->error);    
    }
?>