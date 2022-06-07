<?php
    class Prodotto{
        protected $nome;
        protected $razza;
        protected $fasciaeta;
        protected $tipologia;
        protected $prezzo;
    
    function __construct($_nome, $_razza, $_fasciaeta, $_tipologia, $_prezzo) {
        $this->nome = $_nome;
        $this->razza = $_razza;
        $this->fasciaeta = $_fasciaeta;
        $this->tipologia = $_tipologia;
        $this->prezzo = $_prezzo;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function getRazza(){
        return $this->razza;
    }
    public function setRazza($_razza){
        $this->razza = $_razza;
    }
    public function getFasciaeta(){
        return $this->fasciaeta;
    }
    public function setFasciaeta($_fasciaeta){
        $this->fasciaeta = $_fasciaeta;
    }
    public function getTipologia(){
        return $this->tipologia;
    }
    public function setTipologia($_tipologia){
        $this->tipologia = $_tipologia;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }
    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    }
?>