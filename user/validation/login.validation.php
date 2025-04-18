<?php
  if(isset($_POST["login"])){
    $usernamee = filter_input(INPUT_POST, "usernamee", FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordd = filter_input(INPUT_POST, "passwordd", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($usernamee)){
      $errorMsL = "username field is empty";
    }
    if(empty($passwordd)){
      $errorMsL = "password field is empty";
    }
    if($usernamee && $passwordd){
      $sql = "SELECT * FROM users WHERE username='$usernamee'";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $hashedPsd = $row["password"];
        if(password_verify("$passwordd", $hashedPsd)){
          $_SESSION["username"] = "$usernamee";
          echo"<script>alert('Logged in successfully')</script>";
          header("Location: home.php?succMsg='logged in successfully'");
        }else{
          $errorMsL = "wrong Password";
        }
      }else{
        $errorMsL = "user does not exist";
      }
    }
  }
?>