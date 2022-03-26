<?php
include_once '../database/databaseConnection.php';
class KritikaRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertKritika($kritika) {
        $conn = $this->connection;

        $userId = $kritika->getId();
        $mesazhi = $kritika->getMesazhi();

        $sql = "INSERT INTO kritika (userId, mesazhi) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$userId, $mesazhi]);
    }

    function getAllKritikat() {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kritika";

        $statement = $conn->query($sql);
        $kritikat = $statement->fetchAll();

        return $kritikat;
    }

    function getKritikaById($id) {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM kritika where ID = '$id'";

        $statement = $conn->query($sql);
        $kritika = $statement->fetch();

        return $kritika;
    }

    function updateKritika($userId, $mesazhi) {
        $conn = $this->connection;

        $sql = "UPDATE kritika SET userId = ?, mesazhi = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$userId, $mesazhi]);
        echo "<script>alert('Update was successful')</script>";
    }

    function deleteKritika($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM kritika WHERE userId = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        header("location:../view/dashboard.php");
    }
}
/*     include_once '../models/Kritika.php';
    $kritika = new KritikaRepository();
    $k1 = new Kritika('Josh140', 'Kompania jonë Gjirafa është duke bashkëpunuar me kompaninë GjejPune që nga viti I kaluar dhe kemi pasur eksperiencë të mirë me këtë kompani. Gjatë kësaj kohe ne nuk kemi hasur në probleme, dhe aplikuesit të cilët kanë aplikuar për vendet e punës kanë qenë të gjithë aplikues të nivelit të lartë dhe me të gjitha kriteret e plotsuara.');
    $k2 = new Kritika('Saige128', 'TompLabs është në bashkëpunim me GjejPune për një kohë të gjatë dhe duhet të themi se jemi mjaftë të kënaqur me ta. GjejPune na ka ndihmuar kompanisë tone në rekrutimin e mbi 100 punëtorëve dhe secili nga ta kanë vetëm fjalë të mira për GjejPune dhe qfarë ndihme e madhe ishte kjo website në rrugëtimin e tyre për të gjetur punë.');
    $k3 = new Kritika('Zion330', 'Mendoj që kompania GjejPune është një nga kompanitë më të mira me të cilët kemi bashkëpunuar për të gjetur punëtor sipas kërkesave të shpalljeve që kemi paraqitur. Koha e plotsimit të shpalljeve është Goxha e shkurtë për shkak të numrit të madh të përdoruesve, gjithashtu deri tani jemi të kënaqur me të gjithë punëtorët që kemi punësuar nga kjo kompani.');
    $k4 = new Kritika('Lucas886', 'GjejPune është kompania më e mirë për të gjetur aplikues të dedikuar ndaj punës dhe është një nga mënyrat më të lehta për të aplikuar. Deri tani marrëdhënia e kompanisë tone Zigga me GjejPune është në nivel shumë të mire bashkëpunues dhe shpresojmë që do të vazhdojë kështu. Lucas Miller');
    $kritika->insertKritika($k1);
    $kritika->insertKritika($k2);
    $kritika->insertKritika($k3);
    $kritika->insertKritika($k4); */
?>