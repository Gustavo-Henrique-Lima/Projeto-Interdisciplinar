<?php
    class Docente
    {
        private $siepe;
        private $nome;
        private $sobreNome;
        private $ultimoNome;
        private $email;
        private $senha;
        private $foto;

        public function __construct($siepe,$nome,$sobreNome,$ultimoNome,$email,$senha,$foto)
        {
            $this->siepe=$siepe;
            $this->nome=$nome;
            $this->sobreNome=$sobreNome;
            $this->ultimoNome=$ultimoNome;
            $this->email=$email;
            $this->senha=$senha;
            $this->foto=$foto;
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