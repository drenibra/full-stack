<?php
    if(!isset($_SESSION['username'])) {
?>
        <div class="navbar-buttons">
            <button class="btn default loginBtn">Kyçu</button>
            <button class="btn action signupBtn">Krijo Llogari</button>
        </div>
        <?php
    }
    else {
        ?>
            <?php if ($_SESSION['role'] == 'admin') {
                ?>
                    <a href="../view/dashboard.php" class="btn dashboard">Dashboard</a>
                <?php    
                }
            ?>
            <div class="navbar-buttons flex">
            <a href="../view/userProfile.php?<?php echo"id=".$_SESSION['id'];?>" <?php
                if (basename($_SERVER['PHP_SELF']) == 'userProfile.php') echo 'style="display: none;"';?>>
                <img src="../view/img/user.svg" alt="profile">
            </a>
            <a href="../controller/logout.php" class="btn default">Log Out</a>
        </div>
        <?php
    }
?>