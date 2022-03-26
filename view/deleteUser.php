<?php
    include_once '../repository/userRepository.php';

    $ur = new UserRepository();

    $userId = $_GET['id'];
    $user = $ur->getUserById($userId);
    if ($user['role'] == 'admin') {
        echo "<script>
                alert('Cannot remove an admin!');
                window.location.replace('dashboard.php');
            </script>";
    }
    else {
        $ur->deleteUser($userId);
    }
?>