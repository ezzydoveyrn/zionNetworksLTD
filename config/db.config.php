<?php
  $db_user = "localhost";
  $db_server = "u236627062_localhost";
  $db_password = "zgU^|Yg&1A";
  $db_name = "u236627062_zionlimited";
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