<?php
include_once '../database/databaseConnection.php';
class KontaktRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertKontakti($kontakti) {
        $conn = $this->connection;

        $id = $kontakti->getId();
        $emri = $kontakti->getEmri();
        $mbiemri = $kontakti->getMbiemri();
        $email = $kontakti->getEmail();
        $nrTel = $kontakti->getNrTel();
        $mesazhi = $kontakti->getMesazhi();

        $sql = "INSERT INTO kontakti (id, emri, mbiemri, email, nrTel, mesazhi) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $emri, $mbiemri, $email, $nrTel, $mesazhi]);
    }

    function getAllKontaktet() {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kontakti";

        $statement = $conn->query($sql);
        $kontaktet = $statement->fetchAll();

        return $kontaktet;
    }

    function getKontaktiById($id) {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kontakti where ID = '$id'";

        $statement = $conn->query($sql);
        $kontakti = $statement->fetch();

        return $kontakti;
    }

    function deletekontakti($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM kontakti WHERE ID = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        header("location:dashboard.php");
    }
}
?>