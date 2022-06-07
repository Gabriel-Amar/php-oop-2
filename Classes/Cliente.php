<?php
    
    class Cliente{
        protected $nome;
        protected $cognome;
        protected $carta;
        protected $datacarta;

        function __construct($_nome, $_cognome, $_carta, $_datacarta){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->carta = $_carta;
            $this->datacarta = $_datacarta;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($_nome){
            $this->nome = $_nome;
        }
        public function getCognome(){
            return $this->cognome;
        }
        public function setCognome($_cognome){
            $this->cognome = $_cognome;
        }
        public function getCarta(){
            return $this->carta;
        }
        public function setCarta($_carta){
            $this->carta = $_carta;
        }
        public function getDatacarta(){
            return $this->datacarta;
        }
        public function setDatacarta($_datacarta){
            
            if(date("Y/M") > $_datacarta){
                throw new Exception('Carta non valida');
            }
            $this->datacarta = $_datacarta;
        }

    }
?>