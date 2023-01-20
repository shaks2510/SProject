<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<title>Registration system PHP and MySQL</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
      
      <section class="container">
      <header><font size = "+5" color="white" style="Brush Script MT">BOOK APPOINTMENT</font></header>
      <form method="post" action= "register.php" class="form">
        
		<div class="input-box">
          
		  <!-- Customer name -->
          <input type="text" placeholder="Enter your name" required name="username" value= "<?php echo $username; ?>" >
        </div>
          
          <div class="input-box">
          
		  <!-- Customer name -->
          <input type="email" placeholder="Enter your email" required name="email" value= "<?php echo $email; ?>" >
        </div>

        <div class="input-box">
  	  
  	  <input type="password" placeholder="Create Password" required name="password_1">
  	</div>
  	<div class="input-box">
  	  
  	  <input type="password" placeholder="Confirm Password" required name="password_2">
  	</div>
          
          
          <div class="input-box">
          
		  <!-- Date: use input type date function write a logi to take min value of it as system - local yyy-mm-dd  -->
          <input type="text" placeholder="Enter the services(Service1,Service2,...)" required name="services" multiple value="<?php echo $services; ?>" >
            <small><font color="white">Click</font> <a href="service.php"><font color="white" size="3"><b>Services</b></font></a><font color="white"> to check the available services</font></small>
        </div>

        <div class="input-box">
			
			<!-- Time: use input type time function write a logi to take min value of it as system - local hh:mm 24 hr -->
			<input type="time" placeholder="Enter time slot" required name="time" value="<?php echo $time; ?>" >
            <small><font color="white">Opening Hours: </font> <font color="white"> 9AM-11PM</font></small>
            
		  </div>
  
        <div class="input-box">
            
            <input type="date" id = "date" placeholder="Appointment date" required name="date" required value="<?php echo $date; ?>" >
            
          </div>
          
          

        
		
		  
       
        <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">BOOK</button><br>
            <small><a href="login.php"><font color="white" size="3"><b>Return</b></font></a><font color="white"> to the main page</font></small>
  	</div>
          
         
      </form>
    </section>
  </body>
    <script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#date').attr('min', maxDate);
});
</script>
</html>

