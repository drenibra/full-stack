<?php
    class Kompania { 
        private $id;
        private $name;
        private $email;
        private $ceo;
        private $address; // qyteti
        private $logo;

        function __construct($i, $n, $e, $c, $a, $lo) {
            $this->id = $i;
            $this->name = $n;
            $this->email = $e;
            $this->ceo = $c;
            $this->address= $a;
            $this->logo = $lo;
        }

        function getId() {
            return $this->id;
        }
        function getName() {
            return $this->name;
        }
        function getEmail() {
            return $this->email;
        }
        function getCeo() {
            return $this->ceo;
        }
        function getAddress() {
            return $this->address;
        }
        function getLogo() {
            return $this->logo;
        }
    }
?>