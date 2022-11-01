<?php
    $usuario="";
    $senha="";
    $database="";
    $host="";
    $mysqli= new mysqli($host,$usuario,$senha,$database);
    if($mysqli->error)
    {
        die("Fala ao conectar ao banco de dados".$mysqli->error);    
    }
?>