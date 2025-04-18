<?php
  session_start();
  session_destroy();
  header("Location: login.php?logMsg=successfully logged out");
?>