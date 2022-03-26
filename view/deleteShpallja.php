<?php
    include_once '../repository/ShpalljaRepository.php';

    $shRepo = new ShpalljaRepository();

    $shId = $_GET['id'];
    $shpallja = $shRepo->getShpalljaById($shId);
    $shRepo->deleteShpallja($shId);
?>