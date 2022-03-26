<?php
    session_start();
    include_once "../repository/userRepository.php";
    $uRepo = new userRepository();
    $users = $uRepo->getAllUsers();
    $user = $uRepo->getUserById($_SESSION['id']);

    if (!($_SESSION['role'] == 'admin')) {
        header("location: index.php");
    }
    else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/default-styles.css">
    <link rel="stylesheet" href="css/shpalljet-page.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Dashboard</title>
    <style>
        * , *:before, *:after{ 
            box-sizing:border-box; 
            -moz-box-sizing:border-box; 
            -webkit-box-sizing:border-box; 
            -ms-box-sizing:border-box;
        }
        header {
            font-family: "Montserrat";
            color: white;
            width: 30%;
            float: left;
            height: 100vh;
            margin: unset;
            background-color: rgb(226, 226, 226);
        }
        nav.container {
            background-color: var(--primary);
            flex-direction: column;
            padding: 10px;
            width: 100%;
            margin: unset;
            align-items: unset;
        }
        nav.container h3 {
            color: white;
            font-family: "Montserrat";
            font-weight: 500;
        }
        nav.container h4 {
            color: white;
        }
        nav h5 {
            font-weight: 400;
            font-size: 1.2rem;
        }
        nav p {
            font-weight: 100;
        }
        .admin-info {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px 0;
        }
        .admin-info h5 {
            padding: 8px 0;
        }
        .admin-info img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .admin-list {
            font-weight: 500;
            color: black;
            padding: 20px 0;
        }
        .admin-list li {
            padding: 10px 20px;
            transition: all 0.1s ease-in-out;
        }
        main {
            width: 70%;
            float: right;
        }
        table tr {
            border: 1px solid black;
        } main h2 {
            font-family: "Montserrat";
        }
        .active-option {
            background: rgb(16 55 92);
            color: white;
        }
        .admin-list li:hover {
            background: rgb(16 55 92 / 36%);
            cursor: pointer;
        }
        .dashboard-Kompanite, .dashboard-Kontaktet, .dashboard-Kritikat, .dashboard-Shpalljet {
            display: none;
        }
        .kontakt-personi:not(:first-of-type), .kritika-personi:not(:first-of-type) {
            margin-top: 40px;
        }
        .kritika-personi {
            position: relative;
        }
        .kritika-personi .btn {
            position: absolute;
            right: 0px;
            top: -8px;
        }
        .article_info-location {
            position: unset;
        }
        .dashboard-Shpalljet .flex {
            flex-wrap: wrap;
        }
        .article_info {
            margin-bottom: 0;
        }
        .deleteShpallja {
            width: 30px !important;
            height: 30px !important;
            position: absolute;
            right: 10px;
            top: 10px;
        }
        .shpallje-articles_article:hover {
            cursor: unset;
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div>
                <div>
                    <a href="index.php"><h4>GjejPunë.net</h4></a>
                    <h3>Dashboard</h3>
                </div>
                <div class="admin-info">
                <?php echo "<img src='img/$user[picture]'>"; ?>
                <h5><?php echo $_SESSION['name']." ".$_SESSION['surname']?></h5>
                <p>Admin - <?php echo $_SESSION['puna'];?></p>
                </div>
            </div>
        </nav>
        <ul class="admin-list">
            <li class="active-option">Perdoruesit</li>
            <li>Kompanite</li>
            <li>Kontaktet</li>
            <li>Shpalljet</li>
            <li>Kritikat</li>
        </ul>
    </header>
    <main>
        <div class="container">
            <div class="dashboard-Perdoruesit">    
                <h2>Perdoruesit</h2>
                <div>
                    <table class="styled-table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Puna</th>
                            <th>Pervoja</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                            foreach ($users as $user) {
                                echo 
                                "<tr>
                                    <td>$user[id]</td>
                                    <td>$user[name]</td>
                                    <td>$user[surname]</td>
                                    <td>$user[email]</td>
                                    <td>$user[username]</td>
                                    <td>$user[password]</td>
                                    <td>$user[role]</td>
                                    <td>$user[puna]</td>
                                    <td>$user[pervoja]</td>
                                    <td><a href='dashboard.php?x=edit&id=$user[id]'>Edit</a></td>
                                    <td><a href='deleteUser.php?id=$user[id]'>Delete</a></td>
                                </tr>";
                            }
                        ?>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div>
                    <?php
                        if (isset($_GET['x'])) {
                            switch ($_GET['x']) {
                                case 'edit';
                                include_once "edit.php";    
                            }
                        } 
                    ?>
                </div>
            </div>
            <div class="dashboard-Kompanite">    
                <h2>Kompanite</h2>
                <div>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>CEO</th>
                                <th>Address</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                                include_once "../repository/KompaniaRepository.php";
                                $uRepo = new KompaniaRepository();

                                $kompanite = $uRepo->getAllKompanite();

                                foreach ($kompanite as $kompania) {
                                    echo
                                    "<tr>
                                        <td>$kompania[id]</td>
                                        <td>$kompania[name]</td>
                                        <td>$kompania[email]</td>
                                        <td>$kompania[ceo]</td>
                                        <td>$kompania[address]</td>
                                        <td><a href='deleteKompani.php?id=$kompania[id]'>Delete</a></td>
                                    </tr>";
                                }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <?php
                        if (isset($_GET['x'])) {
                            switch ($_GET['x']) {
                                case 'edit';
                                include_once "edit.php";    
                            }
                        } 
                    ?>
                </div>
            </div>
            <div class="dashboard-Kontaktet">
                <h2>Kontaktet</h2>
                <?php 
                    include_once "../repository/KontaktRepository.php";
                    $kontaktRepo = new KontaktRepository();

                    $kontaktet = $kontaktRepo->getAllKontaktet();

                    foreach ($kontaktet as $k) {
                        echo "
                        <div class='kontakt-personi'>
                            <h4>$k[emri] $k[mbiemri] - $k[email] : $k[nrTel]</h4>
                            <hr>
                            <p>$k[mesazhi]</p>
                        </div>
                        ";
                    }
                ?>
            </div>
            <div class="dashboard-Shpalljet">
                <h2>Shpalljet</h2>
                <div class="flex">
                    <?php 
                        include_once "../repository/ShpalljaRepository.php";

                        
                        $shRepo = new ShpalljaRepository();
                        $shpalljet = $shRepo->getAllShpalljet();
                        function printo($sh) {
                            $shRepo = new ShpalljaRepository();
                            $kompania = $shRepo->getKompaniaById($sh['kompani']);
                            echo "
                            <article class='shpallje-articles_article'>
                                <a href='deleteShpallja.php?id=$sh[id]'><img src='img/close-button.svg' class='deleteShpallja' alt='job-image'/></a>
                                <img src='img/$sh[foto]' alt='job-image'/>
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

                        foreach ($shpalljet as $sh) {
                            printo($sh);
                        }
                        ?>
                    </div>
            </div>
            <div class="dashboard-Kritikat">
                <h2>Kritikat dhe Rishikimet</h2>
                <?php 
                    include_once "../repository/KritikaRepository.php";
                    include_once "../repository/userRepository.php";

                    $kRepo = new KritikaRepository();
                    $kritikat = $kRepo->getAllKritikat();
                    $uRepo = new userRepository();

                    foreach ($kritikat as $kritika) {
                        $user = $uRepo->getUserById($kritika['userId']);
                        echo "
                        <div class='kritika-personi'>
                            <a href='../controller/deleteKritika.php?id=$kritika[userId]' class='btn'>Delete</a>
                            <h4>$user[name] $user[surname] - $user[email] : $user[role]</h4>
                            <hr>
                            <p>$kritika[mesazhi]</p>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(".admin-list li").click(function () {
            $(".admin-list li").removeClass("active-option");
            $(this).addClass("active-option");
            $(this).text();
            $('*[class^="dashboard"]').css("display", "none");
            $(`.dashboard-${$(this).text()}`).css("display", "block");
        })
    </script>
</body>
</html>

<?php
    }
?>