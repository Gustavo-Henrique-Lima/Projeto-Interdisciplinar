<?php
    class Docente
    {
        private $siepe;
        private $nome;
        private $sobreNome;
        private $ultimoNome;
        private $email;
        private $senha;
        
        public function __construct($siepe,$nome,$sobreNome,$ultimoNome,$email,$senha)
        {
            $this->siepe=$siepe;
            $this->nome=$nome;
            $this->sobreNome=$sobreNome;
            $this->ultimoNome=$ultimoNome;
            $this->email=$email;
            $this->senha=$senha;
        }
    
        public function getSiepe()
        {
            return $this->siepe;
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