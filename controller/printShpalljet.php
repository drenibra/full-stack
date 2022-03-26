<?php
    include_once '../repository/ShpalljaRepository.php';
    include_once '../models/Shpallja.php';
    function printo($sh) {
        $shRepo = new ShpalljaRepository();
        $shpalljet = $shRepo->getAllShpalljet();
        $kompania = $shRepo->getKompaniaById($sh['kompani']);
        echo "
            <article class='shpallje-articles_article'>
            <div class='shpallje-articles_article--image'>
                <a href='#'>$kompania[email]</a>
                <img class='shpallja-foto' src='img/$sh[foto]' alt='job-image'/>
            </div>
                <div class='article_info'>
                    <h4>$sh[titulli]</h4>
                    <div class='article_info-location'>
                    <p class='section_paragraph-text'>$kompania[name]</p>
                    <div class='flex'>
                        <img src='img/location.svg' alt='location-icon'>
                        <span>$sh[lokacioni]</span>
                    </div>
                    </div>
                    <div class='article_info-hours flex'>
                    <img class='svg-primary_color' src='img/clock.svg' alt='location-icon'>".
                    ($sh['employment'] == 'Full-Time' ? '<span>'.$sh['employment'].'</span>' : 
                    '<span><span style="color: var(--primary)">Part</span> Time</span>')  
                    ."</div>
                </div>
            </article>
        ";
    }
    function printShpalljet($qyteti, $fusha, $pervoja) {
        $shRepo = new ShpalljaRepository();
        $shpalljet = $shRepo->getAllShpalljet();
        if (isset($qyteti)) {
            if (!empty($qyteti) || !empty($fusha) || !empty($pervoja)) {
                $shpalljetKushti = $shRepo->getShpalljetKushti($qyteti, $fusha, $pervoja);
                
                foreach ($shpalljetKushti as $shp) {
                    printo($shp);
                }
            }
            else {
                foreach ($shpalljet as $sh) {
                    printo($sh);
                }
            }
        } 
    }
?>