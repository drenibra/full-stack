<?php
    include_once "../repository/KontaktRepository.php";
    include_once "../models/Kontakt.php";

    if (isset($_POST['submitContact'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $nrTel = $_POST['nrTel'];
        $mesazhi = $_POST['mesazhi'];
        $id = $emri.rand(100, 999);

        $emriRe = "/^[A-Z][a-z]*/";
        $mbiemriRe = "/^[A-Z][a-z]*/";
        $emailRe = "/^[^@\s]+@[^@\s]+\.[^@\s]+$/";
        $nrTelRe = "/^[0-9\-\(\)\/\+\s]*$/"; 
        
        if (preg_match($emriRe, $emri) == 1 &&
        preg_match($mbiemriRe, $mbiemri) == 1 &&
        preg_match($emailRe, $email) == 1 &&
        preg_match($nrTelRe, $nrTel) == 1) {
            $kontaktRepo = new KontaktRepository();
            $kontaktet = $kontaktRepo->getAllKontaktet();

            $kontakt = new Kontakt($id, $emri, $mbiemri, $email, $nrTel, $mesazhi);
            $kontaktRepo->insertKontakti($kontakt);
            echo "<script>alert('Mesazhi eshte derguar me sukses!!');</script>";
            echo "<script> window.location.replace('contact.php')</script>";
            exit();
        }
        else {
            echo "<p>Mesazhi nuk eshte derguar! Kontrollni te dhenat<p>";
        }
    }
?>