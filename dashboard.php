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

 <!--Loan post Details show -->
   <?php 
        $ques = mysqli_query($db,"SELECT q_id, Status, question_detail, img, ques_points, username, Subject_Name, created_at  FROM questions q
       JOIN students s ON q.student_id=s.id
       JOIN subjects sub ON q.subject_code=sub.s_code ORDER BY created_at DESC")or die(mysqli_error());
      date_default_timezone_set("Asia/Dhaka");
      while($q = mysqli_fetch_assoc($ques))
          {
            $now = new DateTime();
            $p= new DateTime($q['created_at']);
            $interval = $now->diff($p);

            ?>
      <div class="question" id = "response">
        <div class="info">
          <div class="info-title">
            <img src="./uploads/<?php echo $q['img']; ?>"class="rounded-circle " height="35" width="35" alt=""
              loading="lazy" style= "margin-right: 15px;"/>
              <div style="text-transform: capitalize; margin-right: 20px;"><?php echo $q['username']; ?></div>
              <div class="subject"> <p>Post valid Until <?php echo $q['Subject_Name']; ?> Months</p></div>
              <div><?php echo ($interval->format("%a") * 24) + $interval->format("%h"). " hours". $interval->format(" %i minutes "); ?> ago</div>
          </div>
          <div class="point-bar"><i class="fas fa-star"></i><span class=""><?php echo $q['ques_points']; ?> points</div>
        </div>
        <div><a href="question.php?Question_ID=<?php echo $q['q_id']; ?>" class="ques_det"> <?php if(strlen($q['question_detail'])>150){ echo substr($q['question_detail'], 0, 150);} else { echo $q['question_detail'];}  ?> </a></div>
          <div class="last-row"> 
            <div class="status"><?php echo $q['Status']; ?></div>         
            <div class="p-btn ">
              <button type="button" <?php if($q['username']==$row['username'] || $q['Status']=="Donated"){?> disabled="disabled" style="display: none;" <?php } ?> name="Want to Donate" class="p-btn-des" style="border: 1px solid black;"><a href="secure-payment.php" style="text-decoration: none;color: black;">Donate</a></button></div>
          </div>

        <span class="hr-line"></span>
      </div>
   <?php 
   }
   ?>
    <!--Loan post Details show end -->

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