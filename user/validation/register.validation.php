<?php
  if(isset($_POST["register"])){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword = filter_input(INPUT_POST, "cpassword", FILTER_SANITIZE_SPECIAL_CHARS);

    //check inputs
    if(empty($name)){
      $errorMsg = "name field is empty";
    }
    if(empty($phone)){
      $errorMsg = "contact field is empty";
    }
    if(empty($email)){
      $errorMsg = "email field is empty";
    }
    if(empty($username)){
      $errorMsg = "username field is empty";
    }
    if(empty($password)){
      $errorMsg = "password field is empty";
    }
    if(empty($cpassword)){
      $errorMsg = "confirm password field is empty";
    }
    if(strlen($phone) < 10 || strlen($phone) > 10){
      $errorMsg = "the phone number is incorrect";
      
    }else{
      if($cpassword !== $password){
        $errorMsg = "your password don't match";
      }
      else{
        $errorMsg = "";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(full_name, phone_number, email, username, password) VALUE ('$name', '$phone', '$email', '$username', '$hashedPassword')";
        try{
          mysqli_query($conn, $sql);
          echo"<script>alert('reg success')</script>";
        }
        catch(mysqli_sql_exception){
          $errorMsg = "There was an error registering!! try again";
        }
  
      }
    }
  }
?>