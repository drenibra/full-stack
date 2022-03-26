<?php
    class Shpallja { 
        private $id;
        private $titulli;
        private $kompania;
        private $foto;
        private $employment; 
        private $niveli;
        private $fusha;
        private $lokacioni;

        function __construct($i, $n, $k, $l, $em, $ni, $fu, $lo) {
            $this->id = $i;
            $this->titulli = $n;
            $this->kompania = $k;
            $this->foto = $l;
            $this->employment = $em;
            $this->niveli = $ni;
            $this->fusha = $fu;
            $this->lokacioni = $lo;
        }

        function getId() {
            return $this->id;
        }
        function getTitulli() {
            return $this->titulli;
        }
        function getKompania() {
            return $this->kompania;
        }
        function getFoto() {
            return $this->foto;
        }
        function getEmployment() {
            return $this->employment;
        }
        function getNiveli() {
            return $this->niveli;
        }
        function getFusha() {
            return $this->fusha;
        }
        function getLokacioni() {
            return $this->lokacioni;
        }
    }
?>