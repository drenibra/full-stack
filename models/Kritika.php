<?php
    class Kritika { 
        private $userId;
        private $mesazhi;

        function __construct($id, $m) {
            $this->userId = $id;
            $this->mesazhi = $m;
        }
        function getId() {
            return $this->userId;
        }
        function getMesazhi() {
            return $this->mesazhi;
        }
    }
?>