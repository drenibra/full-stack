<html lang="en">
<?php
  session_start();
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/default-styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/shpalljet-page.css" />
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
    <title>Gjej Punë!</title>
    <style>
      form {
        max-width: unset;
      }
    </style>
  </head>
  <body>
    <?php include_once "hamburgerMenu.php";?>
    <?php include_once "header.php";?>
    <main>
      <section class="hero-upper">
        <div class="container">
          <div class="hero-right">
            <div class="flex-responsive">
              <p class="section-introduction">Shpalljet</p>
              <span class="line"></span>
            </div>
            <h1>Gjej vendin e punës</h1>
          </div>
          <?php include_once "../controller/searchForm.php"; ?>
        <?php
          if (isset($_POST['searchBtn'])) {
            $qyteti = '';
            $fusha = '';
            $pervoja = '';

            if (isset($_POST['qyteti'])) $qyteti = $_POST['qyteti'];
            if (isset($_POST['fusha'])) $fusha = $_POST['fusha'];
            if (isset($_POST['pervoja'])) $pervoja = $_POST['pervoja'];
            
            echo "<script>window.location.replace('shpalljet.php?qyteti=$qyteti&fusha=$fusha&pervoja=$pervoja');</script>";
          }
        ?>
        <div class="container">
          <div class="navbar-buttons" <?php if(isset($_SESSION['username'])) echo'style="display:none"'; ?>>
            <button class="btn default loginBtn">Kyçu</button>
            <button class="btn action signupBtn">Krijo Llogari</button>
          </div>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero-articles">
            <?php include_once '../controller/printShpalljet.php';
              $qyteti = '';
              $fusha = '';
              $pervoja = '';
              if (isset($_GET['qyteti'])) $qyteti = $_GET['qyteti'];
              if (isset($_GET['fusha'])) $fusha = $_GET['fusha'];
              if (isset($_GET['pervoja'])) $pervoja = $_GET['pervoja'];
              printShpalljet($qyteti, $fusha, $pervoja);
            ?>
          </div>
        </div>
      </section>
    </main>  
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <?php include_once "../controller/loginModal.php";
      include_once "../controller/signupModal.php";
    ?>
  </body>
</html>