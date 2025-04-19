<?php
  if(isset($_FILES["profilepic"]) && isset($_POST["update"])){
    $file = $_FILES["profilepic"];
    $fileName = $file["name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];
    $fileTmpName = $file["tmp_name"];
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $userNameNew = strtolower($username);
    $allowed = array('jpg', 'jpeg', 'png');
    if(in_array($ext, $allowed)){
      if($fileSize <= 5000000){
        if($fileError === 0){
          $fileNameNew = $userNameNew.uniqid("", true).".".$ext;
          $targetPath = "profile/".$fileNameNew;
          if(move_uploaded_file($fileTmpName, $targetPath)){
            $sql = "UPDATE users SET profile_pic='$fileNameNew' WHERE username='$username'";
            mysqli_query($conn, $sql);
            header("Location: home.php?succes=successfully updated profile");
          }
          else{
            echo"there was an error uploading this file";
          }
        }
        else{
          echo"there was an error uploading this photo";
        }
      }
      else{
        echo"The file is too big upload files less than 1mb or equal to 1mb";
      }
    }
    else{
      echo"this file type is not allowed";
    }
  }
?>