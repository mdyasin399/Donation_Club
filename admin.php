<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin-login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.html");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="shortcut icon" href="./uploads/logo.png" type="img/x-icon" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-dark" type="button" style="background: #fff3d6 !important; color: black">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="main">
	<div class="sidebar">
	  <a class="active" href="admin.php">Dashboard</a>
	 
	  <a href="admin/admin-users.php">Students</a>
	 
	  <a href="admin/admin-question.php">Post</a>
	  <a href="logout.php">Logout</a>

	</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .dashboard {
      display: flex;
      justify-content: space-between;
      margin: 20px;
    }

    .card {
      flex: 1;
      background-color: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      margin-right: 20px;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card h4 {
      color: #333;
      margin-bottom: 10px;
    }

    .card i {
      font-size: 48px;
      color: #3498db;
    }

    .card p {
      font-size: 24px;
      color: #555;
    }

    /* Customize the background color for each card */
   .card:nth-child(1) { background-color: #6fa8dc; }
    .card:nth-child(2) { background-color: #f4cccc; }
    .card:nth-child(3) { background-color: #fce5cd; }
    .card:nth-child(4) { background-color: #d9ead3; } /* Payment Verification card color */
    .card:nth-child(5) { background-color: #c9e0e4; } /* New club-related card color */
  </style>
</head>
<body>

<div class="dashboard">
  <div class="card">
    <h5>Total Users</h5>
    <i class="fas fa-users"></i>
    <p>1,000</p>
  </div>
<div class="card">
    <h5>UIU Clubs</h5>
    <i class="fas fa-club"></i> <!-- Club-related icon -->
    <p>5</p>
  </div>
  <div class="card">
    <h5>Posts</h5>
    <i class="fas fa-file-alt"></i>
    <p>500</p>
  </div>

  <div class="card">
    <h5>Comments</h5>
    <i class="fas fa-comments"></i>
    <p>300</p>
  </div>

  <div class="card">
    <h5>Payment Verification</h5>
    <i class="fas fa-money-bill-wave"></i> <!-- Payment-related icon -->
    <p>3</p>
  </div>

  
</div>

</body>
</html>



</body>
</html>