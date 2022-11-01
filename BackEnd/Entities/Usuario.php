<?php
    class Usuario
    {
        private $matricula;
        private $nome;
        private $senha;
        
        public function __construct($matricula,$nome,$senha)
        {
            $this->matricula=$matricula;
            $this->nome=$nome;
            $this->senha=$senha;
        }
    
        public function getMatricula()
        {
            return $this->matricula;
        }
        public function getNome()
        {
            return $this->nome;
        }
    }
?>