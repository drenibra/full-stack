<?php
    class Kontakt { 
        private $id;
        private $emri;
        private $mbiemri;
        private $email;
        private $nrTel;
        private $mesazhi;

        function __construct($i, $e, $m, $em, $nr, $me) {
            $this->id = $i;
            $this->emri = $e;
            $this->mbiemri = $m;
            $this->email = $em;
            $this->nrTel = $nr;
            $this->mesazhi = $me;
        }
        function getId() {
            return $this->id;
        }
        function getEmri() {
            return $this->emri;
        }
        function getMbiemri() {
            return $this->mbiemri;
        }
        function getEmail() {
            return $this->email;
        }
        function getNrTel() {
            return $this->nrTel;
        }
        function getMesazhi() {
            return $this->mesazhi;
        }
    }    
?>