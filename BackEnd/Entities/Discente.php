<?php
    class Discente
    {
        private $matricula;
        private $email;
        private $nome;
        private $sobreNome;
        private $ultimoNome;
        private $senha;
        private $foto;

        public function __construct($matricula,$email,$nome,$sobreNome,$ultimoNome,$senha,$foto)
        {
            $this->matricula=$matricula;
            $this->email=$email;
            $this->nome=$nome;
            $this->sobreNome=$sobreNome;
            $this->ultimoNome=$ultimoNome;
            $this->senha=$senha;
            $this->foto=$foto;
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
        public function getFoto()
        {
            return $this->foto;
        }
        public function setSenha($senha)
        {
            $this->senha=$senha;
        }
    }
?>