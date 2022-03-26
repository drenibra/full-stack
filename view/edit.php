<?php
    include_once '../repository/userRepository.php';
    $userId = $_GET['id'];

    $userRepository = new UserRepository();

    $user = $userRepository->getUserById($userId);
    if (!($_SESSION['role'] == 'admin')) {
        header("location: index.php");
    }
    else {
?>
<div id="modal-login" style="display: block;">
    <div class="modal-box">
        <form action="" method="post">
            <input type="text" placeholder="ID" name="id" value="<?= $user['id'] ?>" readonly>
            <input type="text" placeholder="Name" name="name" value="<?= $user['name'] ?>">
            <input type="text" placeholder="Surname" name="surname" value="<?= $user['surname'] ?>">
            <input type="text" placeholder="Email" name="email" value="<?= $user['email'] ?>">
            <input type="text" placeholder="Username" name="username" value="<?= $user['username'] ?>">
            <input type="text" placeholder="Password" name="password" value="<?= $user['password'] ?>">
            <input type="text" placeholder="Role" name="role" value="<?= $user['role'] ?>">
            <input type="text" name="puna" value="<?= $user['puna'] ?>">
            <input type="number" name="experience" value="<?= $user['pervoja'] ?>">
            <input type="submit" name="saveBtn" value="Save">
            <input type="submit" name="cancelBtn" value="Cancel">
        </form> 
    </div>
</div>
<?php
    include_once '../controller/userController.php';

    if (isset($_POST['saveBtn'])) {
        $id = $user['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $puna = $_POST['puna'];
        $experience = $_POST['experience'];
        $picture = $user['picture'];
        $userRepository->updateUser($id, $name, $surname, $email, $username, $password, $role, $puna, $experience, $picture);
        echo "<script> window.location.replace('dashboard.php')</script>";
    } else if (isset($_POST['cancelBtn'])) {
        echo "<script> window.location.replace('dashboard.php')</script>";
    }
?>
<?php
    }
?>