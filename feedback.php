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
    <section class="container">
      <header><font size = "+5" color="white" style="Brush Script MT">Your Feedback</font></header>
      <form method="post" action= "feedback.php" class="form">

      

      <div class="input-box">
          
		  <!-- Employee email -->
          <input type="email" placeholder="Enter your Email" required name="email2" value= "<?php echo $email1; ?>" >
        </div>


		<div class="input-box">
          
		  <!-- Employee comment -->
          <input type="text" placeholder="Add comment" required name="feedback" value= "<?php echo $feedback; ?>" >
        </div>


        
       
        <div class="input-group">
  	  <button type="submit" class="btn" name="feed_emp">SUBMIT</button>
            <small><a href="login.php"><font color="white" size="3"><b>Return</b></font></a><font color="white"> to the main page</font></small>
  	</div>
      </form>
    </section>
  </body>
</html>

