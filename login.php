<?php
   ob_start();
   session_start();
?>
<!DOCTYPE HTML>  
<html>
<head>


<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>JEOPARDY</title>
      
      <style>

    @font-face {
	font-family: jeopardy;

    }
		

         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: orange;
			background-image: url('jeopardy.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
         }
         
         .form-signin {
            max-width: 330px;
            margin-right: 50px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;

         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            font-family: jeopardy;
            text-align: center;
            color: #c0c0c0;
            font-size: 100px;
            margin-top: 15px;
			direction: right;
         }
         h3{
            text-align: center;
            color: white;
            margin-top: 20px;
			border-style: groove;
			border-color: black;
			border-width:5px;
			font-size:20px;
			box-sizing: border-box;
         }
		 
      </style>
      
   </head>
	
   <body>
      
      <h2>JEOPARDY!</h2> 
      
      <h3>Please login to play.</h3>
	  <p style="background-image: url('jeopardy.jpg');">
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'brian' && 
                  $_POST['password'] == 'dobbs') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'brian';
                  echo 'You have entered a valid use name and password. Please click the Login button again to play the game.';
                  header("Location: welcomejeo.php");
   exit;
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         <!-- <a href = "logout.php">Click here to clean Session.</a> -->
         
      </div> 
	  <center>
      <input type= "button" value="Signup" onclick="signup.php"> <a href="signup.php">Signup</a> </center>
   </body>
</html>