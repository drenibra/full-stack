<div id="modal-login">
    <div class="modal-box">
        <img class="closeBtn" src="img/close-button.svg" alt="close-button" />
        <div class="container">
        <h2 class="center-text">Mirëse u kthyet!</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username">Username/Email</label>
        <input required type="text" name="username" id="username"/>
        <label for="password">Password</label>
        <input required type="password" name="password" id="password"/>
        <div class="flex maxwidth">
            <input type="submit" name="loginBtn" class="btn action" value="Log In"/>
            <button type="button" class="btn signupBtn closeBtn">Sign Up</button>
        </div>
        </form>
        <?php require_once '../controller/loginValidate.php'; ?>
        </div>
    </div>
</div>