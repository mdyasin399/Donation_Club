<?php

require_once('config.php');

session_start();


$username = "";
$email    = "";

//Registration user
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  	$query = "INSERT INTO students (username, Email, Password) VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
}

//Registration user end


//User login
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  	$query = "SELECT * FROM students WHERE Email='$email' AND Password='$password'";
  	$results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php?$username');
  	
  }
  else{
    echo "<script>alert('Incorrect Information'); window.location = 'login.php'; </script>";
  }
}
//User login end

//Admin login
if (isset($_POST['login_admin'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


    $query = "SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['admin_id']= $row['admin_id'];
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: admin.php?$email');
    
  }
  else{
    echo "<script>alert('Incorrect Information'); window.location = 'admin-login.php'; </script>";
  }
}
//Admin login end


if (isset($_POST['post'])) {
  $points = $_POST['point'];
  if(intval($points)>=5){

    $details =  $_POST['details'];
    $subject =  $_POST['subject'];
    $points = $_POST['point'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    $sid = $_POST['s_id'];
    $st_points = $_POST['st_point'];

    $current_point = $st_points-intval($points);

      if(intval($current_point)>=0){
        $query = "INSERT INTO questions (question_detail, question_img, ques_points, subject_code, student_id) 
            VALUES('$details', '$filename','$points', '$subject', '$sid' )";
      $update = mysqli_query($db, "UPDATE students SET points = '$current_point' WHERE id='$sid'")or die("Query Unsuccessful.");
      mysqli_query($db, $query);
      if (move_uploaded_file($tempname, $folder)) {
              echo "";
          } else {
              echo "<h3>  Failed to upload image!</h3>";
          }
          header('location: dashboard.php');
      }
      else{
        echo "<script>alert('You have Insufficent Points');window.location = 'dashboard.php'; </script>";
      }
  }
  else{
    echo "<script>alert('Given Points must be greater than or equal to 5');window.location = 'dashboard.php';</script>";
  }
}

?>