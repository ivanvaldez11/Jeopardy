<br>
<br>
<br>
<br>
 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<style>
html {
	height:100%;
	background-image: url('jeopardy.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
}
body{
	font-family: arial, verdana;
}
#msform{
	width:400px;
	margin; 50px auto;
	text-align: center;
	position:relative;
}
#msform fieldset{
	background: white;
	border: 0 none;
	border-radius:3px;
	box-shadow: 0 0 15px 1px rgba (0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width:80%;
	margin: 0 10%;
	position: relative;
}
#msform fieldset:not(first-of-type){
	displayL none;
}

#msform input, #msform textarea{
	padding:15px;
	border:1px solid #ccc;
	border-radius: 3px;
	margin-bottom:10px;
	width: 100%
	box-sizing: border-box;
	font-family: montserrat;
	color:#2C3E50;
	font-sizing:13px;
}
	#msform .action-button{
		width:100px;
		background:#27AE60;
		font-weight:bold;
		color: white;
		border: 0 none;
		border-radius;1px
		cursor: pointer;
		padding:10px 5px;
		margin:10px 5px;
	}
	#msform .action-button:hover,#msform .action-button:focus{
		box=shawdow:0 0 0 2px white, 0 0 0 3px #27AE60;
	}
	.fs-title{
		font-size:15px;
		text-transform:uppercase;
		color:#2C3E50;
		margin-bottom:10px;
	}
	.fs-subtitle{
		font-weight: normal;
		font-size: 13px;
		color: #666;
		margin-bottom: 20px;
	}
	
</style>
<body>
<center>
<!--multistep form -->
<form id="msform">

<!-- fieldset-->
<fieldset>
	<h2 class="fs-title">Create your account</h2>
	<h3 class="fs-subtitle"> Good Job </h3>
	<input type="text" name="email" placeholder="Name" />
	<input type="password" name="pass" placeholder="Password" />
	<input type="password" name="cpass" placeholder="Confirm Password" /> <br>
	<a href="loginout.php">Submit</a>
</fieldset>

</center>

</body>
</html> 