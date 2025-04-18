<?php
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
      $name = $row["full_name"];
      $username = $row["username"];
      $phone = $row["phone_number"];
      $email = $row["email"];
      $image = $row["profile_pic"];
      ?>
      <div class="userDetails">
      <div class="profile">
        <div class="profilePic">
          <img src="profile/<?php echo $image; ?>" alt="">
        </div>
      </div>
      <div class="detailsContainer">
        <div class="name"><?php echo $name; ?></div>
        <div class="det">
          <p><b>Username:</b> <?php echo $username; ?></p>
          <p><b>Phone:</b> 0<?php echo $phone; ?></p>
          <p style="display: flex; flex-wrap: wrap;"><b>Email:</b> <?php echo $email; ?></p>
          <p><b>Payment Options:</b> Mpesa</p>
          <div class="btn">
            <button id="updateProfilebtn">Update Profile</button>
          </div>
        </div>
      </div>
      <div class="followDev"></div>
    </div>
      <?php
    }
    
  }
?>