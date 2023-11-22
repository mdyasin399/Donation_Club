<?php 
  include ('includes/header.php');
  include ('includes/navbar.php');

  $query=mysqli_query($db,"SELECT * FROM students where Email='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  $id=  $row['id'];

//Taken Loan
  $ques_count=mysqli_query($db,"SELECT COUNT(question_detail) FROM questions where student_id='$id'")or die(mysqli_error());
  $qc=mysqli_fetch_array($ques_count);

//Given Loan
  $sol_count=mysqli_query($db,"SELECT COUNT(answer) FROM solutions where student_id='$id'")or die(mysqli_error());
        $ac=mysqli_fetch_array($sol_count);
  ?>

 <!--profile photo, name, point, rank-->
  <div class="jinispotro">
  	 <div class="profile-card">
        <div class="img-user">
          <div class="user-img">
          <img src="./uploads/<?php echo $row['img']; ?>"class="rounded-circle " height="24" width="24" alt=""
              loading="lazy" /></div>
          <div class="lit-det">
            <span class="lit-user"><?php echo $row['username']; ?></span>
          
          <div class="point-bar"><i class="fas fa-star"></i><span class=""><?php echo $row['points']; ?> points</div>

          </div>
        </div>

        <div class="email-point">
          <span class="rank" ><?php echo $row['Rank']; ?></span>
        </div>
 <!--profile photo, name, point, rank end-->

        <span class="hr-line" style="margin-top: 30px;"></span>

        <div class="info-section">
        	<div class="ans-count">
        		<p>Given Loan</p>
        		<p><?php echo $ac['0']; ?></p>
        	</div>
        	<hr width="3" size="40" style="0 auto; background: black;">
        	<div class="ques-count">
        		<p>Taken Loan</p>
        		<p><?php echo $qc['0']; ?></p>
        	</div>
        </div>


        <div class="p-btn"><a href="editprofile.php" class="p-btn-des"><i class="fas fa-pencil-alt"></i>  edit Profile</a></div>

        <div class="about">
        	<h4>About</h4>
        	<span class="hr-line" style="margin-top: 10px;"></span>
        	<div class="about-lines">
        		<div>
        			<i class="fas fa-user-graduate"></i>
        			<div> Level: <span>Bachelor of Computer Science and Engineering</span></div>
        		</div>
        		<div>
        			<i class="fas fa-calendar-alt"></i>
        			<div> Joined: <span> 15 July 2023</span></div>
        		</div>
        	</div>
        </div>

      </div>

	  		
	  	</div>
  </div>


  
   <?php
 
   include ('includes/footer.php');
?>