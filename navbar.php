<!-- user -->
<?php include ('includes/session.php'); ?>

<div>

  <div class="topnav">
    <div class="wrapo">
      <div class="flexes">
        <!--Navbar logo-->
        <div class="img-search">
         <a class="navbar-brand" href="dashboard.php"><img src="./uploads/d.png" height="100" width="100%" alt="" loading="lazy" style="margin-top: 2px" /></a>
        </div>
        <!--Navbar logo end-->

        <div class="links">
          <a href="chat/users.php">Messages</a>
          <a href="dashboard.php">Dashboard</a>
          <a href="loan.php">Loan</a>

          <!--profile photo and name on the navbar-->
          <a class="nav-link d-sm-flex align-items-sm-center" href="#">

          <img src="./uploads/<?php echo $row['img']; ?>"class="rounded-circle" height="28" width="28" alt=""
            loading="lazy" style="border: 2px solid #6c63dd;" />

          <span class="d-none d-sm-block ms-1"><?php echo $row['username']; ?></span>
          </a>
           <!--profile photo and name on the navbar end-->

              <!-- Dropdown profile-->
                <div class="dropdown">
                 <a class="dropbtn" href="#" style=" color: #6c63dd">
                  <i class="fas fa-user-cog fa-lg"></i>
                 </a>
                <div class="dropdown-content">
                <a class="dropdown-item" href="user-profile.php">Profile</a>
                <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
              <!-- Dropdown profile end-->
          </div>
        </div>
      </div>
      
    </div>
  </div>

</div>





