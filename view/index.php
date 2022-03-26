<?php
  session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/default-styles.css" />
    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
    <title>Gjej Punë!</title>
    <style>
      form .flex-responsive {
        flex-direction: column;
      }
      form .flex-responsive div {
        display: flex;
        flex-direction: column;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <?php include_once "hamburgerMenu.php";?>
    <?php include_once "header.php";?>
    <main>
      <?php
        if(isset($_SESSION['username'])) {
      ?>
      <h1 style="display: flex; justify-content: center; text-align: center;">Mirësevini, <?php echo $_SESSION['name'];?></h1>
      <?php
        }
      ?>
      <section class="hero-upper">
        <div class="container">
          <div class="hero-right">
            <div class="flex-responsive">
              <p class="section-introduction">Introducing</p>
              <span class="line"></span>
            </div>
            <h1>Gjej Punë!</h1>
            <div>
              <h2>
                <span class="secondary">Për badihavgji</span>, studenta—të
                gjithë!
              </h2>
            </div>
          </div>
          <div class="hero-left">
            <p class="section_paragraph-text">
              Në gjejpune.net mundohemi të gjejmë opsionet më të mira për
              punësim në të gjitha qytetet në Kosovë dhe rajon!
            </p>
          </div>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <?php include_once "../controller/searchForm.php"; 
            if (isset($_POST['searchBtn'])) {
              $qyteti = '';
              $fusha = '';
              $pervoja = '';
  
              if (isset($_POST['qyteti'])) $qyteti = $_POST['qyteti'];
              if (isset($_POST['fusha'])) $fusha = $_POST['fusha'];
              if (isset($_POST['pervoja'])) $pervoja = $_POST['pervoja'];
              echo "<script>window.location.replace('shpalljet.php?qyteti=$qyteti&fusha=$fusha&pervoja=$pervoja')</script>";
            }
          ?>
      </section>
      <section class="punet">
        <div class="container">
          <h2>Punët më të kërkuara</h2>
          <p class="section_paragraph-text">
              Në gjejpune.net mundohemi të gjejmë opsionet më të mira për
              punësim në të gjitha qytetet në Kosovë dhe rajon!
          </p>
          <div class="section_arrows flex">
            <img src="img/arrow-left.svg" alt="arrow-left" class="arrow-left" />
            <img src="img/arrow-right.svg" alt="arrow-right" class="arrow-right"/>
          </div>
        </div>
        <div class="container owl-carousel">
          <article class="job-article">
            <img class="article-image" src="img/architect.jpg" alt="image1"/>
            <div class="info">
              <h3>Arkitekt</h3>
              <p>Arkitektët përdorin aftësitë e tyre teknike dhe krijuese për të projektuar struktura që i përshtaten kërkesave të klientëve të tyre. Si arkitekt, ju do të projektoni ndërtesa të reja ose zgjerime ose ndryshime në strukturat ekzistuese dhe do të këshilloni për restaurimin dhe ruajtjen e pronave të vjetra.</p>
              <a href="https://www.google.com/search?q=Arkitekt">Read more</a>
            </div>
          </article>
          <article class="job-article">
            <img class="article-image" src="img/programer.jpg" alt="image2" />
            <div class="info">
              <h3>Programer</h3>
              <p>Një programues kompjuteri, ose programues i sistemeve, shkruan kodin për të ndihmuar aplikacionet softuerike të funksionojnë në mënyrë më efikase. Detyrat e tyre përfshijnë projektimin dhe përditësimin e zgjidhjeve softuerike, shkrimin dhe përditësimin e kodit burimor dhe menaxhimin e sistemeve të ndryshme operative.</p>
              <a href="https://www.google.com/search?q=Programer">Read more</a>
            </div>
          </article>
          <article class="job-article">
            <img class="article-image" src="img/realestate.jpg" alt="image3" />
            <div class="info">
              <h3>Agjent i Patundshmërisë</h3>
              <p>Agjentët e pasurive të paluajtshme janë profesionistë që ndihmojnë blerësit e shtëpive të gjejnë dhe blejnë një shtëpi të re ose hapësirë komerciale. Ata i ndihmojnë ata të blejnë dhe shesin shtëpi dhe udhëzojnë klientët përmes proceseve të negociatave për të marrë dollarin më të lartë për pronën e tyre kur shesin.</p>
              <a href="https://www.google.com/search?q=real+estate+agent">Read more</a>
            </div>
          </article>
        </div>
      </section>
      <section class="pse-section">
        <div class="container">
          <div class="left">
            <div class="flex">
              <div class="pse-left_feature">
                <img src="img/users.svg" alt="users-icon" />
                <div>
                  <p>100,000+</p>
                  <p class="section_paragraph-text">Perdorues</p>
                </div>
              </div>
              <div class="pse-left_feature">
                <img src="img/jobs.svg" alt="jobs-icon" />
                <div>
                  <p>56,000+</p>
                  <p class="section_paragraph-text">Vende Pune</p>
                </div>
              </div>
            </div>
            <div class="flex">
              <div class="pse-left_feature">
                <img src="img/flag.svg" alt="flag-icon" />
                <div>
                  <p>3+</p>
                  <p class="section_paragraph-text">Shtete</p>
                </div>
              </div>
              <div class="pse-left_feature">
                <img src="img/user.svg" alt="user-icon" />
                <div>
                  <p>75+</p>
                  <p class="section_paragraph-text">Punëtorë</p>
                </div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="flex">
              <p class="section_paragraph-text">Pse gjejpune?</p>
              <span class="line whiteLine"></span>
            </div>
            <h2>Ne ju gjejmë vendet më adekuate të punës</h2>
            <p>
              Si një platformë e njohur me shumë përdorues nga i gjithë rajoni,
              me ekspertizë më të vjetër se 5 vjeçare.
            </p>
          </div>
        </div>
      </section>
      <section class="kerkesat-section">
        <div class="container">
          <div class="flex section-introduction">
            <p>Llojet e punëve</p>
            <span class="line"></span>
          </div>
          <h2>Të gjithë llojet e punëve në bazë të kërkesave</h2>
          <div class="kerkesat-options flex">
            <ul class="left">
              <li class="kerkesat-options_element" id="arkitekt">Arkitekt</li>
              <li class="kerkesat-options_element" id="programer">Programer</li>
              <li class="kerkesat-options_element active-option" id="kamarier">Kamarier</li>
              <li class="kerkesat-options_element" id="mesues">Mësues</li>
              <li class="kerkesat-options_element" id="mekanik">Mekanik i veturave</li>
            </ul>
            <div class="right"></div>
          </div>
        </div>
      </section>
      <section class="partneret-section">
        <div class="container">
          <h2>Kush e përkrahë Gjej Punë?</h2>
          <p class="section_paragraph-text">Brendet më të mëdha në Kosovë</p>
          <div class="partneret flex">
            <a href="https://vivafresh-rks.com/"><img src="img/viva-logo.png" alt="viva-logo"/></a>
            <a href="https://www.hibpetrol.com/"><img src="img/hib-logo.png" alt="hib-logo"/></a>
            <a href="https://www.raiffeisen-kosovo.com/"><img src="img/raiffeisen-logo.png" alt="raiffeisen-logo"/></a>
            <a href="https://www.elkosgroup.com/"><img src="img/elkos-logo.png" alt="elkos-logo"/></a>
          </div>
        </div>
      </section>
      <section class="reviews">
        <div class="container">
          <div class="flex-responsive space-between">
            <div>
              <div class="flex section-introduction">
                <p>Kritikat & Rishikimet</p>
                <span class="line"></span>
              </div>
              <h2>Çka thonë klientët tanë</h2>
              <?php if(isset($_SESSION['username'])) {?>
                <p class="reviewBtn" style="cursor: pointer;">Deshironi te leni nje rishikim? Kliko <span style="text-decoration: underline;">ketu.</span></p>
              <?php } ?>
            </div>
            <div class="section_arrows flex">
              <img src="img/arrow-left.svg" alt="arrow-left" class="arrow-left" />
              <img src="img/arrow-right.svg" alt="arrow-right" class="arrow-right" />
            </div>
          </div>
        </div>
        <div class="kritika">
          <div class="container">
            <h4>Shkruani një rishikim</h4>
            <form action="" method="post">
              <img class="closeRishikimi" src="img/close-button.svg" alt="close-button">
              <textarea name="mesazhi" cols="30" rows="10"></textarea>
              <input type="submit" value="Dergo">
            </form>
            <?php
              if (isset($_POST['mesazhi'])) {
                $mesazhi = $_POST['mesazhi'];
                $userId = $_SESSION['id'];
                include_once "../repository/KritikaRepository.php";
                include_once "../models/Kritika.php";
                $kRepo = new KritikaRepository();
                $kritika = new Kritika($userId, $mesazhi);
                $kRepo->insertKritika($kritika);
                echo "<script>alert('Keni derguar mesazhin me sukses!');
                  window.location.replace('index.php');
                </script>";
              }
            ?>
          </div>
        </div>
        <div class="container owl-carousel">
          <?php
            include_once "../repository/KritikaRepository.php";
            include_once "../repository/userRepository.php";

            $kRepo = new KritikaRepository();
            $kritikat = $kRepo->getAllKritikat();
            $uRepo = new userRepository();

            foreach ($kritikat as $k) {
                $user = $uRepo->getUserById($k['userId']);
                $picture = $user['picture'];
                if ($user['picture'] == '') {
                  $picture = 'user_white.svg';
                }
                echo "
                <article class='review-article'>
                  <p>$k[mesazhi]</p>
                  <div class='review-article_user flex'>
                    <img src='img/$picture' alt='user-profile' />
                    <div class='user_info'>
                      <p class='user_info-name'>$user[name] $user[surname]</p>
                      <p class='user_info-job'>$user[puna]</p>
                    </div>
                  </div>
                </article>
                ";
            }
          ?>
        </div>
      </section>
      <section class="shpallje">
        <div class="container">
          <div class="flex-responsive space-between">
            <h2>Shpallje për ty</h2>
            <a class="flex secondary" href="shpalljet.php" class="flex">
              <p>Shiko më shumë</p>
              <img src="img/right arrow.svg" alt="right" />
            </a>
          </div>
          <div class="shpallje-articles">
            <?php include_once '../controller/printShpalljet.php';
              $shRepo = new ShpalljaRepository();
              $shpalljet = $shRepo->getAllShpalljet();
              $i = 0;
              foreach ($shpalljet as $sh) {
                if ($i < 3) {
                  printo($sh);
                  $i++;
                }
              }
            ?>
          </div>
        </div>
      </section>
      <section class="footer-upper">
        <div class="container">
          <div class="flex-responsive">
            <div class="footer-left">
              <div class="flex-responsive">
                <p class="section-introduction">Bëhuni anëtar</p>
                <span class="line whiteLine"></span>
              </div>
              <h2 class="whiteText">Gati për të gjetur punë?</h2>
              <p class="section_paragraph-text footer-text">
                Merrni përvojën më të mirë të punës që nuk e keni ndjerë kurrë
                më parë
              </p>
              <button class="btn action signupBtn">SIGN UP NOW</button>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container flex-responsive">
        <div>
          <h1 class="whiteText">Gjej Punë!</h1>
          <p>
            Në gjejpune.net ju ofrojmë opsionet më të mira për punësim në të
            gjitha qytetet në Kosovë dhe rajon!
          </p>
          <div class="flex">
            <a href="https://www.instagram.com"><img src="img/instagram.svg" alt="instagram-logo"/></a>
            <a href="https://www.youtube.com"><img src="img/youtube.svg" alt="youtube-logo"/></a>
            <a href="https://www.facebook.com"><img src="img/facebook.svg" alt="facebook-logo"/></a>
          </div>
        </div>
        <div class="flex footer-right">
          <div class="flex">
            <ul>
              <li><a href="shpalljet.php">Punet</a></li>
              <li><a href="https://www.google.com/search?q=Programer">Programer</a></li>
              <li><a href="https://www.google.com/search?q=Arkitekt">Arkitekt</a></li>
              <li><a href="https://www.google.com/search?q=Kamarier">Kamarier</a></li>
              <li><a href="https://www.google.com/search?q=Ekonomist">Ekonomist</a></li>
              <li><a href="https://www.google.com/search?q=Biolog">Biolog</a></li>
              <li><a href="https://www.google.com/search?q=Kontabilist">Kontabilist</a></li>
            </ul>
            <ul>
              <li><a href="#">Kompania</a></li>
              <li><a href="about-us.php">Rreth Nesh</a></li>
              <li><a href="#">Çmimet</a></li>
            </ul>
          </div>
          <div class="flex">
            <ul>
              <li><a href="#">Mbështetje</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
            <ul>
              <li><a href="contact.php">Kontakto</a></li>
              <li><a href="contact.php">contact@gjejpune.com</a></li>
              <li><a href="contact.php">di53843@ubt-uni.net</a></li>
              <li><a href="contact.php">em52473@ubt-uni.net</a></li>
              <li><a href="contact.php">+383 44 xxx xxx</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/app.js"></script>
    <?php include "../controller/loginModal.php";
      include "../controller/signupModal.php"; 
    ?>
  </body>
</html>