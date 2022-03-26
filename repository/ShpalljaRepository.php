<?php
include_once '../database/databaseConnection.php';
class ShpalljaRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertShpallja($shpallja) {
        $conn = $this->connection;

        $id = $shpallja->getId();
        $titulli = $shpallja->getTitulli();
        $kompania = $shpallja->getKompania();
        $foto = $shpallja->getFoto();
        $employment = $shpallja->getEmployment();
        $niveli = $shpallja->getNiveli();
        $fusha = $shpallja->getFusha();
        $lokacioni = $shpallja->getLokacioni();

        $sql = "INSERT INTO shpallja (id, titulli, kompani, foto, employment, niveli, fusha, lokacioni) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $titulli, $kompania, $foto, $employment, $niveli, $fusha, $lokacioni]);
    }

    function getAllShpalljet() {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM shpallja";

        $statement = $conn->query($sql);
        $shpalljet = $statement->fetchAll();

        return $shpalljet;
    }

    function getShpalljaById($id) {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM shpallja where id = '$id'";

        $statement = $conn->query($sql);
        $shpallja = $statement->fetch();

        return $shpallja;
    }

    function updateshpallja($id, $name, $email, $ceo, $address, $logo) {
        $conn = $this->connection;

        $sql = "UPDATE shpallja SET id=?, titulli=?, kompania=?, foto=?, employment=?, niveli=?, fusha=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $titulli, $kompania, $foto, $employment, $niveli, $fusha]);
        echo "<script>alert('Update was successful')</script>";
    }

    function deleteShpallja($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM shpallja WHERE id = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        header("location:dashboard.php");
    }

    function getShpalljetKushti($qyteti, $fusha, $pervoja) {
        $conn = $this->connection;

        $sql = "SELECT * FROM shpallja WHERE "
        .(!empty($qyteti) ? "lokacioni = '$qyteti'".(!empty($fusha) || !empty($pervoja) ? " and " : "") : "")
        .(!empty($fusha) ? "fusha = '$fusha'".(!empty($pervoja) ? " and " : "") : "")
        .(!empty($pervoja) ? "niveli = '$pervoja'" : "");

        $statement = $conn->query($sql);
        $shpalljet = $statement->fetchAll();

        return $shpalljet;
    }

    function getKompaniaById($id) {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kompania where id = '$id'";

        $statement = $conn->query($sql);
        $shpallja = $statement->fetch();

        return $shpallja;
    }
}
/*     include_once '../models/Shpallja.php';
    $shpallja = new ShpalljaRepository();
    $sh1 = new Shpallja('SmartProject'.rand(100, 999), 'Arkitekt/e', 'Smart Project', 'arkitekt.jpg', 'Part-Time', 'Advanced', 'Arkitekturë', 'Prishtinë');
    $sh2 = new Shpallja('Gjirafa'.rand(100, 999), 'Software developer', 'Gjirafa', 'programer.jpg', 'Full-Time', 'Intern', 'Programim', 'Fushë Kosovë');
    $sh3 = new Shpallja('ModiumStudio'.rand(100, 999), '3D Rendering and Visualization', 'Modium Studio', '3dvisualizer.jpg', 'Part-Time', 'Mesatar', 'Arkitekturë', 'Pejë');
    $sh4 = new Shpallja('ComputerFluent'.rand(100, 999), 'Front End Developer', 'Computer Fluent', 'data-science.jpg', 'Full-Time', 'Mesatar', 'Programim', 'Prishtinë');
    $sh5 = new Shpallja('Shell'.rand(100, 999), 'Database Analyst', 'Shell', 'sbd.jpg', 'Full-Time', 'Advanced', 'Programim', 'Prishtinë');
    $sh6 = new Shpallja('BonAmiBar'.rand(100, 999), 'Kamarier', 'BonAmi Bar', 'kamarier.jpg', 'Part-Time', 'Mesatar', 'Gastronomi', 'Gjilan');

    $shpallja->insertShpallja($sh1);
    $shpallja->insertShpallja($sh2);
    $shpallja->insertShpallja($sh3);
    $shpallja->insertShpallja($sh4);
    $shpallja->insertShpallja($sh5);
    $shpallja->insertShpallja($sh6); */
?>