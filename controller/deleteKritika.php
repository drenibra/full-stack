<?php
    include_once "../repository/KritikaRepository.php";

    $kRepo = new KritikaRepository();
    $userId = $_GET['id'];
    $kRepo->deleteKritika($userId);
    echo "<script>alert('Keni fshire me sukses!')</script>";
?>