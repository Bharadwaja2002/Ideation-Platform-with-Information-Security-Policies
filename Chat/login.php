<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
    
  }
?>

<?php include_once "header.php"; ?>
<style>
	body{
		background-image:url("im/36.jpg") ;
	    background-position: center;
		background-size:cover;
		background-repeat: no-repeat;
	}
    .right{
        text-align:center;
        color: black;
        
    }
    .back-icon{
    object-position: right;
    }
	
</style>
<html>
<body>
  <div class="wrapper"  style="background-color:#ffd700">
      
    <section class="form login">
        
        
        <header> <button hretype="submit" name="button" class="back-icon"><a href="/down/index.php?option=login"><span><i class="fas fa-arrow-left" ></i></span></a></button> Chat Time </header>
        
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a>
        </div>
        
    </section>
      
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
