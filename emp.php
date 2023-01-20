<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="Style1.css">
  
   <style>
    body{
        
        background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('https://i.etsystatic.com/22921703/r/il/14701d/4375206325/il_fullxfull.4375206325_47g7.jpg');
        background-position: center;
        background-repeat: no-repeat;
       background-size: cover;
        position: relative;
    
        }
        
   </style>
       
  </head>
    
  <body>
      <br>
      <br>
      <br>
    
    <section class="container">
      <header><font size = "+5" color="white" style="Brush Script MT">EMPLOYEE DETAILS</font></header>
      <form method="post" action= "emp.php" class="form">
        
		<div class="input-box">
          
		  
          <input type="text" placeholder="Enter your name" required name="empname" value= "<?php echo $empname; ?>" >
        </div>

        <div class="input-box">
          
		  
          <input type="email" placeholder="Enter your email" required name="eemail" value="<?php echo $eemail; ?>" >
            </div>

        <div class="input-box">
			
			
			<input type="tel" placeholder="Contact number" required name="number" value="<?php echo $number; ?>" >
            
            
		  </div>
          
          <div class="input-box">
  	  
  	  <input type="password" placeholder="Create Password" required name="password_3">
  	</div>
  	<div class="input-box">
  	  
  	  <input type="password" placeholder="Confirm Password" required name="password_4">
  	</div>
         
          <div class="input-box">
          
		  <!-- Date: use input type date function write a logi to take min value of it as system - local yyy-mm-dd  -->
          <input type="text" placeholder="Enter your address" required name="addr" value="<?php echo $addr; ?>" >
            </div>
          <div class="input-box">
			
			<!-- Time: use input type time function write a logi to take min value of it as system - local hh:mm 24 hr -->
			<input type="number" placeholder="Pincode" required name="pincode" value="<?php echo $pincode; ?>" >
            
            
		  </div>
  
        <div class="input-box">
			
			<!-- Time: use input type time function write a logi to take min value of it as system - local hh:mm 24 hr -->
			<input type="number" placeholder="Shift(I / II)" required name="shift" min="1" max="2" value="<?php echo $shift; ?>" >
            
            
		  </div>
  
        
		
		  
       
        <div class="input-group">
  	  <button type="submit" class="btn" name="reg_emp">REGISTER</button>
            <small><a href="login.php"><font color="white" size="3"><b>Return</b></font></a><font color="white"> to the main page</font></small>
  	</div>
      </form>
    </section>
  </body>
</html>

