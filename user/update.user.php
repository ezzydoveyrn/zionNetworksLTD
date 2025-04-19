<?php
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
      $name = $row["full_name"];
      $username = $row["username"];
      $phone = $row["phone_number"];
      $email = $row["email"];
      $image = $row["profile_pic"];
      ?>
      <form action="home.php" method="post" enctype="multipart/form-data">
        <div class="name">
          <label for="named">Name:</label>
          <input type="text" name="named" id="named" class="named" value="<?php echo $name; ?>">
        </div>
        <div class="otherDet">
          <label for="phoneN">Phone Number:</label>
          <input type="tel" name="phoneN" id="phoneN" class="phoneN" value="0<?php echo $phone; ?>">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="email" value="<?php echo $email; ?>">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="username" value="<?php echo $username; ?>">
        </div>
        <div class="passwordSec">
          <label for="currentpsd">Current Password</label>
          <input type="password" name="currentpsd" id="currentpsd" class="currentpsd">
          <label for="newpsd">New Password</label>
          <input type="password" name="newpsd" id="newpsd" class="newpsd">
          <label for="confirmnewpsd">Confirm Password</label>
          <input type="password" name="confirmnewpsd" id="confirmnewpsd" class="confirmnewpsd">
        </div>
        <div class="fileupload">
          <input type="file" name="profilepic" id="profilepic" class="profilepic">
        </div>
        <div class="submit">
          <input type="submit" value="UPDATE" class="update" id="update" name="update">
        </div>
      </form>
      <?php require_once("updatedelete/details.update.php"); ?>
      <?php require_once("updatedelete/profilepic.update.php"); ?>
      <?php
    }
  }

?>