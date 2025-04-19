<?php
  if(isset($_POST["update"])){
    $named = filter_input(INPUT_POST, "named", FILTER_SANITIZE_SPECIAL_CHARS);
    $phoneN = filter_input(INPUT_POST, "phoneN", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $usernamedd = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $cpsd = filter_input(INPUT_POST, "currentpsd", FILTER_SANITIZE_SPECIAL_CHARS);
    $newpsd = filter_input(INPUT_POST, "newpsd", FILTER_SANITIZE_SPECIAL_CHARS);
    $cnewpsd = filter_input(INPUT_POST, "confirmnewpsd", FILTER_SANITIZE_SPECIAL_CHARS);


    if(empty($named)){
      echo"name field is empty";
    }
    if(empty($phoneN)){
      echo"phone field is empty";
    }
    if(empty($email)){
      echo"email field is empty";
    }
    if(empty($usernamedd)){
      echo"username field is empty";
    }
    if(!empty($named) && !empty($phoneN) && !empty($email) && !empty($usernamedd)){
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $sql = "UPDATE users SET full_name='$named', phone_number='$phoneN', email='$email', username='$usernamedd' WHERE username='$username'";
        try{
          mysqli_query($conn, $sql);
          echo"<script>alert('details changed successfully')</script>";
        }
        catch(mysqli_sql_exception){
          echo"error changing details";
        }
      }
    }
    if(empty($cpsd)){
      $errorEmp = "current password field is empty";
    }
    if(empty($newpsd)){
      $errorEmp = "new password field is empty";
    }
    if(empty($cnewpsd)){
      $errorEmp = "confirm password field is empty";
    }
    if($cnewpsd !== $newpsd){
      echo"password don't match";
    }
    else{
      $passHash = password_hash($cnewpsd, PASSWORD_DEFAULT);
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $passwordHashed = $row["password"];
        if(password_verify("$cpsd", $passwordHashed)){
          $sql = "UPDATE users SET password='$passHash' WHERE username='$username'";
          try{
            mysqli_query($conn, $sql);
            echo"<script>alert('password changed successfully')</script>";
          }
          catch(mysqli_sql_exception){
            echo"error changing password";
          }
        }
      }
    }
  }
?>