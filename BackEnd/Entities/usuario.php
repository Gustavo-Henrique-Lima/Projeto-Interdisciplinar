<?php
    class Usuario
    {
        private $login;
        private $nome;
        private $senha;
    }
    
    public function __construtor($matricula,$nome,$senha)
    {
            $this->login=$matricula;
            $this->nome=$nome;
            $this->senha=$senha;
    }

    function getNome()
    {
        return $this->nome;
    }
?>