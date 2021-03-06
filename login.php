<?php
  include("templates/header.php");
  require_once("utils/dbconnect.php");
  require_once("utils/api.php");
  require_once("templates/display_labels.php");
  require_once("utils/authenticate.php");
  $db=getdb();
  session_start();
?> 

  <div class="row">
    <div class="large-3 columns" style="min-height: 700px"></div>
    <div class="large-6 columns" style="margin-top: 100px">
      <form method = "POST" action = "ajax/login.php" id = 'userLogin'>
        <label for="username">Username</label>
        <input type="text" name = "username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
         <div style="margin-top:10px"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?></div>
        <input type="submit" id="login" value="Login" class="button" style="top:10px; left: 30%">
      </form>
      <form method = "GET" action = "ajax/loginAsGuest.php" id = "guestLogin">
        <input type="submit" id="guestSubmit" value="Login as guest" class="button" style="left: 30%">
      </form>
    </div>
    <div class="large-3 columns"></div>
  </div>

<?php 
  include("templates/footer.php");
?>