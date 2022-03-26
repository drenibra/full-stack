<?php
    include_once '../repository/userRepository.php';
    $userId = $_GET['id'];

    $userRepository = new UserRepository();

    $user = $userRepository->getUserById($userId);
    $users = $userRepository->getAllUsers();
    session_start();
    if (!isset($_SESSION['username'])) {
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
    <link rel="stylesheet" href="css/responsive.css" />
    <title>Document</title>
    <style>
        form input {
            width: 100%;
        }
        form .flex div:first-of-type {
            margin-right: 5px;
        }
        form .flex div:last-of-type {
            margin-left: 5px;
        }
        .main-left {
            border-right: 1px solid rgb(193, 193, 193);
            padding-right: 50px;
        }
        .main-center {
            padding-left: 50px;
        }
        .main-left img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
        }
        main {
            display: flex;
            justify-content: center;
            padding-bottom: 100px;
        }
        * , *:before, *:after {
            box-sizing: border-box; 
            -moz-box-sizing: border-box; 
            -webkit-box-sizing: border-box; 
            -ms-box-sizing: border-box;
        }
        .main-left .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
          <a href="index.php"><h3>GjejPunë.net</h3></a>
          <ul class="navbar-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="shpalljet.php">Shpalljet</a></li>
            <li><a href="about-us.php">Rreth Nesh</a></li>
            <li><a href="contact.php">Kontakt</a></li>
          </ul>
          <?php include "../controller/loginButtons.php";?>
        </nav>
    </header>
    <main>
        <div class="main-left">
            <div class="container">
                <?php
                    if ($user['picture'] != '') {
                        echo "<img src='img/$user[picture]'>";
                    } else {
                        echo "
                            <form method='POST' action='' enctype='multipart/form-data'>
                                <input type='file' name='uploadfile' value='' />
                                <div>
                                    <button type='submit' name='upload'>UPLOAD</button>
                                </div>
                            </form>
                        ";
                    }
                    if (isset($_POST['upload'])) {
                    
                        $filename = $_FILES["uploadfile"]["name"];
                        $tempname = $_FILES["uploadfile"]["tmp_name"];    
                        $folder = "img/".$filename;

                        $db = mysqli_connect("localhost", "root", "", "projekti");
                        include_once '../database/databaseConnection.php';
                        $conn = new DatabaseConnection;
                        $connection = $conn->startConnection();
                        $conn = $connection;

                        $sql = "UPDATE user SET picture = ? WHERE id = '$userId'";
                        $statement = $conn->prepare($sql);
                        $statement->execute([$filename]);
                        
                        if (move_uploaded_file($tempname, $folder))  {
                            echo "<script> window.location.replace('userProfile.php?id=$userId')</script>";
                        }
                    }
                ?>
                <h2><?php echo $_SESSION['name']." ".$_SESSION['surname']?></h2>
                <h5><?php echo $user['puna']?></h5>
            </div>
        </div>
        <div class="main-center">
            <div class="container">
                <h2>Profili</h2>
                <form action="" method="post">
                    <div class="flex">
                        <div>
                            <label for="name">Emri</label>
                            <input type="text" placeholder="Name" name="name" value="<?= $user['name'] ?>">
                        </div>
                        <div>
                            <label for="surname">Mbiemri</label>
                            <input type="text" placeholder="Surname" name="surname" value="<?= $user['surname'] ?>">
                        </div>
                    </div>
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email" name="email" value="<?= $user['email'] ?>">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" name="username" value="<?= $user['username'] ?>">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" value="<?= $user['password'] ?>">
                    <label for="puna">Titulli</label>
                    <input type="text" name="puna" value="<?= $user['puna'] ?>">
                    <label for="experience">Viti i fillimit</label>
                    <input type="number" name="experience" value="<?= $user['pervoja'] ?>">
                    <input type="submit" name="saveBtn" value="Save">
                </form> 
                <?php
                    include_once '../controller/userController.php';

                    if (isset($_POST['saveBtn'])) {
                        $id = $user['id'];
                        $name = $_POST['name'];
                        $surname = $_POST['surname'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $puna = $_POST['puna'];
                        $experience = $_POST['experience'];
                        $role = $user['role'];
                        $userRepository->updateUser($id, $name, $surname, $email, $username, $password, $role, $puna, $experience, $user['picture']);
                        echo "<script> window.location.replace('userProfile.php?id=$id')</script>";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>

<?php
    }
?>