<?php
    require_once __DIR__ . '/Cliente.php';

    class ClientePremium extends Cliente{
        protected $newsletter;
        protected $sconto = "-20%";

        public function getNewsletter(){
            return $this->newsletter;
        }
        public function getSconto(){
            return $this->sconto;
        }
    }
?>