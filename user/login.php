<?php
  session_start();
  require_once("../config/db.config.php");
  if(isset($_GET["logMsg"])){
    $logMsg = $_GET["logMsg"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="theme-color" content="#073b2f">
  

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="description" content="Experience the fastest internet speeds and seamless connectivity with Zion Networks.">
  <meta name="author" content="Ezekiel M. Ogana">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zion Networks | User Registration and Login</title>
</head>
<link rel="stylesheet" href="stylesheet/login.page.css">
<body>
  <div class="container">
    <div class="form">
      <form action="login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="usernamee" id="username" class="username" required>
        <label for="password">Password</label>
        <input type="password" name="passwordd" id="password" class="password" required>
        <input type="submit" value="LOGIN" class="login" id="login" name="login">
      </form>
    </div>
    <?php
      require_once("validation/login.validation.php");
    ?>
    <div class="titleFormDisp">
      <div>
        <div style="padding: 5px; border: 2px solid red; border-radius: 10px;">
          <?php echo $errorMsL; ?>
          <?php echo $logMsg; ?>
        </div>
      </div>
      <div class="logo">
        <a href="../index.php">
          <img src="../assets/logo/white-white.png" alt="">
        </a>
      </div>
      <h2>Welcome Back!!</h2>
      <p>Don't have an account?</p>
      <button onclick="signup()">Sign Up</button>
    </div>
  </div>
  <div class="container-2 displayNone">
    <div class="form">
      <form action="login.php" method="post">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" class="name" required>
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" class="phone" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="email" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="password" required>
        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword" class="password">
        <input type="submit" value="REGISTER" name="register" class="register" id="login">
      </form>
    </div>
    <?php
      require_once("validation/register.validation.php")
    ?>
    <div class="titleFormDisp">
      <div>
        <div id="errorMsgDisp" style="border: 2px solid red; padding: 5px; border-radius: 10px;"><?php
          echo $errorMsg;
        ?></div>
      </div>
      <div class="logo">
        <a href="../index.php">
          <img src="../assets/logo/white-white.png" alt="">
        </a>
      </div>
      <h2>Join Us</h2>
      <p>have an account?</p>
      <button onclick="signup()">Login</button>
    </div>
  </div>

  <script>
    let registerBtn = document.querySelector(".register");
    registerBtn.addEventListener("click", (e)=>{
      e.preventDefault;
    });
    let errorMsgDisp = document.getElementById("errorMsgDisp");

    if(errorMsgDisp.innerHTML){
      let loginForm = document.querySelector(".container");
      let signupForm = document.querySelector(".container-2");

      loginForm.classList.toggle("displayNone")
      signupForm.classList.toggle("displayNone");
    }
    function signup(){
      let loginForm = document.querySelector(".container");
      let signupForm = document.querySelector(".container-2");

      loginForm.classList.toggle("displayNone")
      signupForm.classList.toggle("displayNone")
    }
  </script>
</body>
</html>

<?php
  mysqli_close($conn);
?>