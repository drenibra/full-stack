<?php
    include_once "../repository/userRepository.php";
    include_once '../models/user.php';

    if (isset($_POST['registerBtn'])) {
        $uRepo = new userRepository();

        $users = $uRepo->getAllUsers();
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = 'user';
        $id = $username.rand(100, 999);
        $ekziston = false;
        foreach ($users as $user) {
            if ($user['username'] == $username || $user['email'] == $email) {
                echo '<p style="text-align: center; margin-top:20px; color: red;">Perdoruesi ekziston!</p>';
                echo '<p style="text-align: center; margin-top:10px; color: red;">Provoni email/username tjeter, apo kyçuni</p>';
                echo '<script>
                        $("#modal-signup").css("display", "block");
                        $("main, header, footer").css("filter", "blur(4px)");
                        </script>';
                        exit();
                $ekziston = true; 
            }
        }
        if (!$ekziston) {
            $user = new User($id, $name, $surname, $email, $username, $password, '', 0);
            $uRepo->insertUser($user);
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $role;
            echo "<script>alert('Jeni regjistruar me sukses!');</script>";
            echo "<script> window.location.replace('userProfile.php?id=$id')</script>";
            exit();
        }
    }
/*  per qellime testimi   
    $uRepo = new userRepository();
    $user1 = new User('Josh'.rand(100, 999), 'Josh', 'Abbott', 'Josh.Abbott@gmail.com', 'Josh'.rand(8, 420), 'test', '', 0);
    $user2 = new User('Tyree'.rand(100, 999), 'Tyree', 'Hurst', 'Tyree.Hurst@gmail.com', 'Tyree'.rand(8, 420), 'test', '', 0);
    $user3 = new User('Delilah'.rand(100, 999), 'Delilah', 'Key', 'Delilah.Key@gmail.com', 'Delilah'.rand(8, 420), 'test', '', 0);
    $user4 = new User('Saige'.rand(100, 999), 'Saige', 'Melton', 'Saige.Melton@gmail.com', 'Saige'.rand(8, 420), 'test', '', 0);
    $user5 = new User('Katelyn'.rand(100, 999), 'Katelyn', 'Vang', 'Katelyn.Vang@gmail.com', 'Katelyn'.rand(8, 420), 'test', '', 0);
    $user6 = new User('Nigel'.rand(100, 999), 'Nigel', 'Fitzpatrick', 'Nigel.Fitzpatrick@gmail.com', 'Nigel'.rand(8, 420), 'test', '', 0);
    $user7 = new User('Kaila'.rand(100, 999), 'Kaila', 'Bauer', 'Kaila.Bauer@gmail.com', 'Kaila'.rand(8, 420), 'test', '', 0);
    $user8 = new User('Zion'.rand(100, 999), 'Zion', 'Barrett', 'Zion.Barrett@gmail.com', 'Zion'.rand(8, 420), 'test', '', 0);
    $user9 = new User('Kyleigh'.rand(100, 999), 'Kyleigh', 'Hughes', 'Kyleigh.Hughes@gmail.com', 'Kyleigh'.rand(8, 420), 'test', '', 0);
    $user10 = new User('Shelby'.rand(100, 999), 'Shelby', 'Brennan', 'Shelby.Brennan@gmail.com', 'Shelby'.rand(8, 420), 'test', '', 0);
    $user11 = new User('Lucas'.rand(100, 999), 'Lucas', 'Miller', 'Lucas.Miller@gmail.com', 'Lucas'.rand(8, 420), 'test', '', 0);
    $user12 = new User('Benjamin'.rand(100, 999), 'Benjamin', 'Ray', 'Benjamin.Ray@gmail.com', 'Benjamin'.rand(8, 420), 'test', '', 0);
    $uRepo->insertUser($user1);
    $uRepo->insertUser($user2);
    $uRepo->insertUser($user3);
    $uRepo->insertUser($user4);
    $uRepo->insertUser($user5);
    $uRepo->insertUser($user6);
    $uRepo->insertUser($user7);
    $uRepo->insertUser($user8);
    $uRepo->insertUser($user9);
    $uRepo->insertUser($user10);
    $uRepo->insertUser($user11);
    $uRepo->insertUser($user12); */
?>