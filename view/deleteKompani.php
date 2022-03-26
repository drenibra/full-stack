<?php
    include_once '../repository/KompaniaRepository.php';

    $kRepo = new KompaniaRepository();

    $kId = $_GET['id'];
    $user = $kRepo->getkompaniaById($kId);
    $kRepo->deleteKompania($kId);
?>