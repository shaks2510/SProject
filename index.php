<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
   <style>
    body{
        
        background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('https://i.etsystatic.com/22921703/r/il/14701d/4375206325/il_fullxfull.4375206325_47g7.jpg');
        background-position: center;
        background-repeat: no-repeat;
       background-size: auto;
        position: relative;
    
        }
        
   </style>
</head>
<body>

<div class="header">
	<h2>Thank You!</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?>, It's your time to shine now!</strong></p><br>
    <p>Services: <strong><?php echo $_SESSION['services']; ?></strong></p><br>
    	<p> <a href="index.php?logout='1'" style="color: red;">Book another appointment.</a> </p>
    <?php endif ?>
</div>

</body>
</html>