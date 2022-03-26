<?php
include_once '../database/databaseConnection.php';
class KompaniaRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertkompania($kompania) {
        $conn = $this->connection;

        $id = $kompania->getId();
        $name = $kompania->getName();
        $email = $kompania->getEmail();
        $ceo = $kompania->getCeo();
        $address = $kompania->getAddress();
        $logo = $kompania->getLogo();

        $sql = "INSERT INTO kompania (id, name, email, ceo, address, logo) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $email, $ceo, $address, $logo]);
    }

    function getAllKompanite() {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kompania";

        $statement = $conn->query($sql);
        $kompanite = $statement->fetchAll();

        return $kompanite;
    }

    function getkompaniaById($id) {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kompania where ID = '$id'";

        $statement = $conn->query($sql);
        $kompania = $statement->fetch();

        return $kompania;
    }

    function updatekompania($id, $name, $email, $ceo, $address, $role) {
        $conn = $this->connection;

        $sql = "UPDATE kompania SET name = ?, email = ?, ceo = ?, address = ?, role = ?, WHERE ID = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$name, $email, $ceo, $address, $role, $id]);
        echo "<script>alert('Update was successful')</script>";
    }

    function deleteKompania($id) {
        $conn = $this->connection;

        $sql2 = "DELETE FROM shpallja WHERE kompani = ?";
        $sql = "DELETE FROM kompania WHERE ID = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $statement = $conn->prepare($sql2);
        $statement->execute([$id]);
        header("location:dashboard.php");
    }
}
    
/*     include_once '../models/Kompania.php';
    $kRepo = new KompaniaRepository();
    $k1 = new Kompania('ly'.rand(100, 999), 'computer.ly', 'comp-ly@gmail.com', 'Dren Ibrahimi', 'Prishtinë', 'computerly.png');
    $k2 = new Kompania('Fluent'.rand(100, 999), 'Computer Fluent', 'fluentpc@gmail.com', 'Eros Mehmeti', 'Prishtinë', 'computer-fluent.png');
    $k3 = new Kompania('Gjirafa'.rand(100, 999), 'Gjirafa', 'gjirafa@gmail.com', 'Mergim Cahani', 'Fushë Kosovë', 'gjirafa.jpg');
    $k4 = new Kompania('SmartProject'.rand(100, 999), 'Smart Project', 'smartproject@contact.com', 'Barlet Bejta', 'Prishtinë', 'smartproject.png');
    $k5 = new Kompania('ShellKosova'.rand(100, 999), 'Shell Kosova', 'shell-ks@contact.com', 'Ledion Shehu', 'Prishtinë', 'shell.svg');
    $k6 = new Kompania('ModiumStudio'.rand(100, 999), 'Modium Studio', 'studio-modium@contact.com', 'Ardita Logoreci', 'Gjakovë', 'modium.png');
    $k7 = new Kompania('bonami'.rand(100, 999), 'BonAmi', 'bonami-ks@contact.com', 'Filan Gjinolli', 'Gjilan', 'bonami.jpg');
    $k8 = new Kompania('bonami'.rand(100, 999), 'BonAmi', 'bonami-ks@contact.com', 'Filan Gjinolli', 'Gjilan', 'bonami.jpg');

    $kRepo->insertkompania($k1);
    $kRepo->insertkompania($k2);
    $kRepo->insertkompania($k3);
    $kRepo->insertkompania($k4);
    $kRepo->insertkompania($k5);
    $kRepo->insertkompania($k6);
    $kRepo->insertkompania($k7); 
    $kRepo->insertkompania($k8); 
    */

    
/*     include_once '../models/Kompania.php';
    $kRepo = new KompaniaRepository();
    $k1 = new Kompania('TEST'.rand(100, 999), 'TEST', 'comp-ly@gmail.com', 'TEST', 'Prishtinë', 'computerly.png');
    $k2 = new Kompania('TEST'.rand(100, 999), 'TEST', 'comp-ly@gmail.com', 'TEST', 'Prishtinë', 'computerly.png');
    $k3 = new Kompania('TEST'.rand(100, 999), 'TEST', 'comp-ly@gmail.com', 'TEST', 'Prishtinë', 'computerly.png');
    $k4 = new Kompania('TEST'.rand(100, 999), 'TEST', 'comp-ly@gmail.com', 'TEST', 'Prishtinë', 'computerly.png');
    $kRepo->insertkompania($k1);
    $kRepo->insertkompania($k2);
    $kRepo->insertkompania($k3);
    $kRepo->insertkompania($k4); */
?>