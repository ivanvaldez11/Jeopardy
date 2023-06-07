<body style="background-image: url('jeo.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

<br>

<br>

<br>


<br>

<!DOCTYPE html>
<html>
<head>
<style>
div {
  font-family: Monaco;
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}
h1 {text-align: center; font-family: Snell Roundhand; font-size:100px; color:red}
p {text-align: center;}
a {font-size:50px; color:red;}

</style>
</head>
<body>

<h1>Welcome to Jeopardy</h1>
<center><div>Thanks for Picking us</div></center>

<center>
<input type= "button" value="Let the Fun Start" onclick="index.php"> <a href="index.php">Start the Game</a><br>
<input type= "button" value="Login" onclick="index.php"> <a href="login.php">Back to Login In</a>
</center>
<center><div>Can you do it</div></center>
</body>
</html>

