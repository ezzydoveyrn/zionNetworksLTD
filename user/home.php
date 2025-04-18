<?php
  session_start();
  $username = $_SESSION["username"];
  if(!$username){
    header("Location: login.php?logMsg=you must login to continue");
  }
  require_once("../config/db.config.php");
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
  <title>Zion Networks Limited</title>
  <link rel="stylesheet" href="stylesheet/main.home.css">
</head>
<body>
  <main>
    <div class="sideNav">
      <div class="landingPageLink">
        <a href="../index.php">
          <img src="../assets/logo/white.png" alt="">
        </a>
      </div>
      <div class="links">
        <a href="logout.php">LOGOUT</a>
      </div>
    </div>
    <div class="body"></div>
    <?php
      require_once("fetchdet/fetchuser.det.php");
    ?>
  </main>
</body>
</html>

<?php
  mysqli_close($conn);
?>