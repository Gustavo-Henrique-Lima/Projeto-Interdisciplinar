<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['usuario']))
    {
        die("Realize login para acessar a página<a href=\"login.php\">Entrar</a>");
    }
?>