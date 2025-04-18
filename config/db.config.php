<?php
  $db_user = "localhost";
  $db_server = "root";
  $db_password = "";
  $db_name = "zionlimited";
  $errorMsg = "";
  $errorMsL = "";
  $logMsg = "";

  try{
    $conn = mysqli_connect($db_user, $db_server, $db_password, $db_name);
  }
  catch(mysqli_sql_exception){
    $errorMsL = "error connecting to the server";
  }
?>