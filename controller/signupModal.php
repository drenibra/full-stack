<div id="modal-signup">
  <div class="modal-box">
    <img class="closeBtn" src="img/close-button.svg" alt="close-button" />
    <div class="container">
      <h2 class="center-text">Mirëse vini!</h2>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="nameInput" />
        <label class="err" id="nameError"></label>

        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surnameInput" />
        <label class="err" id="surnameError"></label>

        <label for="username">Username</label>
        <input type="text" name="username" id="usernameInput" />
        <label class="err" id="usernameError"></label>

        <label for="password">Password</label>
        <input type="password" name="password" id="passwordInput" />
        <label class="err" id="passwordError"></label>

        <label for="email">email</label>
        <input type="text" name="email" id="emailInput" />
        <label class="err" id="emailError"></label>
        <div class="flex maxwidth">
          <input type="submit" name="registerBtn" id="signupSubmitBtn" class="btn action" value="Sign Up"/>
          <button type="button" class="btn loginBtn closeBtn">Log In</button>
        </div>
      </form>
      <?php
        include '../controller/userController.php';
      ?>
    </div>
  </div>
</div>