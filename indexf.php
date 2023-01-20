<?php 
  session_start(); 

 
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
  	<?php if (isset($_SESSION['success1'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success1']; 
          	unset($_SESSION['success1']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email2'])) : ?>
    	<p><strong><?php echo $_SESSION['email2']; ?>,  We value your feedback!</strong></p><br>
    	<p> <a href="login.php?logout='1'" style="color: red;">Return to the home page</a> </p>
    <?php endif ?>
</div>

</body>
</html>