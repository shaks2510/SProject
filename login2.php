<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
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
  	<h2>EMPLOYEE LOGIN</h2>
  </div>
	 
  <form method="post" action="login2.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="eemail" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_emp">LOGIN</button>
  	</div>
  	
  	
  </form>
</body>
</html>