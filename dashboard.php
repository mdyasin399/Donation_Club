<?php 
  include ('includes/header.php');
  include ('includes/navbar.php');

  $query=mysqli_query($db,"SELECT * FROM students where Email='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
  <div class="main-area">
     <!--Main area left sidebar -->  
    <?php include ('includes/left-sidebar.php'); ?>
    <!--Main area left sidebar end-->  
    
    
    <div class="question-area">

         <!--Loan post Title -->
         <div class="big-title">
            <h1>See all the donation posts</h1>
         <!--Loan post Title end -->
         </div>

          <!--Loan post title after dubble line -->
           <span class="hr-line"></span>
           <span class="hr-line"></span>
          <!--Loan post title after dubble line end -->

     

    </div>
        


    <!--Main area right sidebar -->  
         <div class="right-sidebar">
            <?php include ('includes/right-sidebar.php'); ?>
         </div>
    
    <!--Main area right sidebar end-->  
   </div>

   <!--Main area Footer -->  
   <?php
   include ('includes/footer.php');
   ?>
   <!--Main area Footer end-->  