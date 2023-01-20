<?php
session_start();

// initializing variables
$username = "";
$email="";
$services    = "";
$time = "";
$date    = "";
$empname    = "";
$eemail    = "";
$number    = "";
$addr    = "";
$pincode    = "";
$shift    = "";
$email1    = "";
$feedback = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sproject');

// REGISTER USER

  // receive all input values from the form
if (isset($_POST['reg_user'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $services = mysqli_real_escape_string($db, $_POST['services']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);



  	
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
    if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($services)) {
  	array_push($errors, "Service(s) is/are required");
  }

  if (empty($time)) {
  	array_push($errors, "Time-slot is required");
  }
 if (empty($date)) {
  	array_push($errors, "Appointment date is required");
  }
    if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
    }

        

  $user_check_query = "SELECT * FROM booking_details WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

    if(count($errors)==0){
    $password = md5($password_1);    

  	$query = "INSERT INTO booking_details (username, email, services, time, date, password) 
  			  VALUES('$username','$email', '$services', '$time','$date','$password')";
        mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['services'] = $services;
  	$_SESSION['success'] = "Hurray! You have successfully booked an appointment.";
  	header('location: index.php');
  	    
    }
        
        

}
    
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM booking_details WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index2.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}





// REGISTER EMPLOYEE

  // receive all input values from the form
if (isset($_POST['reg_emp'])){
  $empname = mysqli_real_escape_string($db, $_POST['empname']);
  $eemail = mysqli_real_escape_string($db, $_POST['eemail']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $addr = mysqli_real_escape_string($db, $_POST['addr']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  $shift = mysqli_real_escape_string($db, $_POST['shift']);
  $password_3 = mysqli_real_escape_string($db, $_POST['password_3']);
  $password_4 = mysqli_real_escape_string($db, $_POST['password_4']);


  	
  if (empty($empname)) {
  	array_push($errors, "Empname is required");
  }
  if (empty($eemail)) {
  	array_push($errors, "Email is required");
  }

  if (empty($number)) {
  	array_push($errors, "Contact number is required");
  }
 if (empty($addr)) {
  	array_push($errors, "Address is required");
  }
   
    if (empty($pincode)) {
  	array_push($errors, "Pincode is required");
  }
    
    if (empty($shift)) {
  	array_push($errors, "Enter your shift");
  }
    if ($password_3 != $password_4) {
	array_push($errors, "The two passwords do not match");
    }
    
    
  $user_check_query1 = "SELECT * FROM employee_details WHERE email='$eemail' LIMIT 1";
  $result1 = mysqli_query($db, $user_check_query1);
  $user1 = mysqli_fetch_assoc($result1);
  
  if ($user1) { // if user exists

    if ($user1['email'] === $eemail) {
      array_push($errors, "email already exists");
    }
  }
    if(count($errors)==0){
    $password1 = md5($password_3);     

  	$query1 = "INSERT INTO employee_details (empname, email, number, address, pincode, shift, password1) 
  			  VALUES('$empname', '$eemail', '$number','$addr','$pincode','$shift','$password1')";
          mysqli_query($db, $query1);
  	$_SESSION['empname'] = $empname;
    $_SESSION['successs'] = "Your registration is successful.";
  	header('location: indexe.php');
  	    
    }
}  

if (isset($_POST['login_emp'])) {
  $eemail = mysqli_real_escape_string($db, $_POST['eemail']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);

  if (empty($eemail)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password1 = md5($password1);
  	$query1 = "SELECT * FROM employee_details WHERE email='$eemail' AND password1='$password1'";
  	$resultss = mysqli_query($db, $query1);
  	if (mysqli_num_rows($resultss) == 1) {
  	  $_SESSION['empname'] = $empname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index3.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



if (isset($_POST['login_owner'])) {
  $USERNAME = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $PASSWORD = mysqli_real_escape_string($db, $_POST['PASSWORD']);

  if (empty($USERNAME)) {
  	array_push($errors, "Username is required");
  }
  if (empty($PASSWORD)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$PASSWORD = $PASSWORD;
  	$query2 = "SELECT * FROM owner WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'";
  	$resultsss = mysqli_query($db, $query2);
  	if (mysqli_num_rows($resultsss) == 1) {
  	  $_SESSION['USERNAME'] = $USERNAME;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index4.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



if (isset($_POST['feed_emp'])){
 
  $email1 = mysqli_real_escape_string($db, $_POST['email2']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
  


    
    if (empty($email1)) {
    array_push($errors, "Email is required");
  }
  if (empty($feedback)) {
    array_push($errors, "Feedback is required");
  }


  if(count($errors)==0){    

    $query6 = "INSERT INTO feedback (email2, comment)
          VALUES('$email1', '$feedback')";
        mysqli_query($db, $query6);
        $_SESSION['email2'] = $email1;
    $_SESSION['success1'] = "Your feedback is submitted.";
    
    header('location: indexf.php');
        
    }
  }

?>