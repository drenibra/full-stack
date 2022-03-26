<?php
    class User { 
        private $id;
        private $name;
        private $surname;
        private $email;
        private $username;
        private $password;
        private $puna;
        private $pervoja;

        function __construct($i, $n, $s, $e, $u, $p, $pu, $pe) {
            $this->id = $i;
            $this->name = $n;
            $this->surname = $s;
            $this->email = $e;
            $this->username = $u;
            $this->password = $p;
            $this->puna = $pu;
            $this->pervoja = $pe;
        }

        function getId() {
            return $this->id;
        }
        function getName() {
            return $this->name;
        }
        function getSurname() {
            return $this->surname;
        }
        function getEmail() {
            return $this->email;
        }
        function getUsername() {
            return $this->username;
        }
        function getPassword() {
            return $this->password;
        }
        function getPuna() {
            return $this->puna;
        }
        function getPervoja() {
            return $this->pervoja;
        }
    }
?>