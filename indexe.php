<?php 
  session_start(); 

  if (!isset($_SESSION['empname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['empname']);
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
  	<?php if (isset($_SESSION['successs'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['successs']; 
          	unset($_SESSION['successs']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['empname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['empname']; ?>, to the Looksify's team!</strong></p><br>
   <p><strong>GOOD LUCK!</strong></p><br>
    
    	<p> <a href="indexe.php?logout='1'" style="color: red;">Return to main page</a> </p>
    <?php endif ?>
</div>

</body>
</html>