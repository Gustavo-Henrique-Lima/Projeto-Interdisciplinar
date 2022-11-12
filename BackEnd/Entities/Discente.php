<?php
    class Discente
    {
        private $matricula;
        private $email;
        private $nome;
        private $sobreNome;
        private $ultimoNome;
        private $senha;
        
        public function __construct($matricula,$email,$nome,$sobreNome,$ultimoNome,$senha)
        {
            $this->matricula=$matricula;
            $this->email=$email;
            $this->nome=$nome;
            $this->sobreNome=$sobreNome;
            $this->ultimoNome=$ultimoNome;
            $this->senha=$senha;
        }
    
        public function getMatricula()
        {
            return $this->matricula;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getSobreNome()
        {
            return $this->sobreNome;
        }
        public function getUltimoNome()
        {
            return $this->ultimoNome;
        }
        public function getSenha()
        {
            return $this->senha;
        }
    }
?>