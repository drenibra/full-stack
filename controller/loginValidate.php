<?php
    if (isset($_POST['loginBtn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once "../repository/userRepository.php";
        $userRepo = new UserRepository;
        $users = $userRepo->getAllUsers();

        $i=0;
        foreach($users as $user){
            $i++;
            if(($username == $user['username'] || $username == $user['email']) && $password == $user['password']){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['surname'] = $user['surname'];
                $_SESSION['puna'] = $user['puna'];
                $_SESSION['pervoja'] = $user['pervoja'];
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $user['role'];
                
                echo "<script> window.location.replace('../view/index.php')</script>";
                exit();
            } else{
                if ($i == sizeof($users)){
                    echo '<p style="text-align: center; margin-top:20px;">Incorrect Username or Password!</p>';
                    echo '<script>
                            $("#modal-login").css("display", "block");
                            $("main, header, footer").css("filter", "blur(4px)");
                            </script></div></div></div>';
                    include "../controller/signupModal.php";
                    exit();
                }
            }
        }
    }
?>