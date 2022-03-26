<html lang="en">
<?php
  session_start();
?>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/default-styles.css"/>
    <link rel="stylesheet" href="css/about-us_page.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"/>
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon"/>
    <title>Kompanitë - Gjej Punë!</title>
    <style>
      .dashboard {
          margin-top: unset !important;
          width: unset !important;
          background-color: unset !important;
      }
      .login img {
        width: 30px;
        height: 30px;
      }
      .hero-content {
        padding: 200px 0;
      }
      .about-us article {
        width: 400px;
        box-shadow:0 10px 20px 1px rgba(0,0,0,0.226);
        padding: 20px;
        margin: 15px;
      }
      .about-us .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      .about-us article .flex img {
        width: 40px;
      }
      .article-image {
        height: 200px;
        width: 100%;
        object-fit: contain;
      }
      p {
        margin: 10px 0;
      }
    </style>
  </head>
  <body>
    <?php include_once "hamburgerMenu.php";?>
    <?php include_once "header.php";?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <h1>Eksploroni mundesitë e ndryshme!</h1>
          </div>
        </div>
      </section>
      <section class="about-us">
        <div class="container">
          <?php
            include_once "../repository/KompaniaRepository.php";
            $uRepo = new KompaniaRepository();

            $kompanite = $uRepo->getAllKompanite();

            foreach ($kompanite as $kompania) {
              echo "
                <article>
                  <img class='article-image' src='img/$kompania[logo]' alt='logo'>
                  <div>
                    <h4>$kompania[name]</h4>
                    <p>$kompania[email]</p>
                    <p>$kompania[ceo]</p>
                    </div>
                  <div class='flex'>
                    <img src='img/location.svg' alt='location-icon'>
                    <span style='font-style: italic;'>$kompania[address]</span>
                  </div>
                </article>
              ";
            }
          ?>
        </div>
      </section>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <?php include_once "../controller/loginModal.php";
      include_once "../controller/signupModal.php"; ?>
  </body>
</html>