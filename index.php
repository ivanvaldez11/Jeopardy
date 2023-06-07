<?php
 session_start();
?>

<html >
<head>
<title>Web programming Jeopardy</title>
<script>
function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)-100;
    } else {
      localStorage.clickcount = 0;
    }
    document.getElementById("result").innerHTML = "Your Score: " + localStorage.clickcount;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
function clickCounterr() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+100;
    } else {
      localStorage.clickcount = 0;
    }
    document.getElementById("result").innerHTML = "Your Score: " + localStorage.clickcount;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
function clickCounterrr() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)-100;
    } else {
      localStorage.clickcount = 0;
    }
    document.getElementById("resultt").innerHTML = "Your Score: " + localStorage.clickcount;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
function clickCounterrrr() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+100;
    } else {
      localStorage.clickcount = 0;
    }
    document.getElementById("resultt").innerHTML = "Your Score: " + localStorage.clickcount;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>
<style type="text/css">
body {
background-color:#060CE9;
}
body, table, table td {
border:0px;
border-collapse:collapse;
margin:0px;
padding:0px;
}
a {
color:#FFFF00;
}
#board {
margin-left:20px;
color:#FFFF00;
}
#board #categories td {
background-color:#060CE9;
background-image:none;
border:#FFFFFF solid 3px;
}
#board tr td{
background-image:url(boardelementgrad.gif);
background-repeat:none;
height:100px;
width:180px;
border:#000000 solid 3px;
border-collapse:collapse;
text-align:center;
color: yellow;
font-size:24px;
}
#container {
text-align:center;
padding:20px;
}
#score {
margin-left:20px;
margin-top:20px;
background-color:#000000;
color:#FFFF00;
}
#score tr td {
border:#FFFFFF solid 3px;
border-collapse:collapse;
text-align:center;
font-size:24px;
height:50px;
width:180px;
}
.team {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
}
.score {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
text-align:right;
}

/*MIGHT NEED TO COMMENT THIS OUT*/
a:visited{
  color: red;
  text-decoration: none;
}

.box {
  width: 60%;
  length: 60%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.overlay {
  width: 60%;
  length: 60%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.btn{
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.btn: hover {
  background: #06D85F;
}
.answer {
  background-color: yellow;
  padding: 20px;
  display: none;
}
  
span:hover + .answer {
  display: block;
}
</style>
</head>

<body>


<?php 
$cookie_name = "Jeopardy";
$cookie_value = $_SESSION['username'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<div class = "cookie">
      <?php
  if(!isset($_COOKIE[$cookie_name])) {
       echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
       echo "Cookie '" . $cookie_name . "' is set!<br>";
       echo "Value is: " . $_COOKIE[$cookie_name];
  }
  ?>

</div>

<div id="container">
<table id="board">
  <tr id="categories">
    <td id="categories1">HTTP Status Codes</td>
    <td id="categories2">HTML</td>
    <td id="categories3">CSS</td>
    <td id="categories4">PHP</td>
    <td id="categories5">About The Class</td>
  </tr>
  <tr id="row1">
    <td id="row1_1"><a href='#popup1'>100</a></td>
    <td id="row1_2"><a href='#popup2'>100</a></td>
    <td id="row1_3"><a href='#popup3'>100</a></td>
    <td id="row1_4"><a href='#popup4'>100</a></td>
    <td id="row1_5"><a href='#popup5'>100</a></td>
  </tr>
  <tr id="row2">
    <td id="row1_1"><a href='#popup6'>200</a></td>
    <td id="row1_2"><a href='#popup7'>200</a></td>
    <td id="row1_3"><a href='#popup8'>200</a></td>
    <td id="row1_4"><a href='#popup9'>200</a></td>
    <td id="row1_5"><a href='#popup10'>200</a></td>
  </tr>
  <tr id="row3">
    <td id="row1_1"><a href='#popup11'>300</a></td>
    <td id="row1_2"><a href='#popup12'>300</a></td>
    <td id="row1_3"><a href='#popup13'>300</a></td>
    <td id="row1_4"><a href='#popup14'>300</a></td>
    <td id="row1_5"><a href='#popup15'>300</a></td>
  </tr>
  <tr id="row4">
    <td id="row1_1"><a href='#popup16'>400</a></td>
    <td id="row1_2"><a href='#popup17'>400</a></td>
    <td id="row1_3"><a href='#popup18'>400</a></td>
    <td id="row1_4"><a href='#popup19'>400</a></td>
    <td id="row1_5"><a href='#popup20'>400</a></td>
  </tr>
  <tr id="row5">
    <td id="row1_1"><a href='#popup21'>500</a></td>
    <td id="row1_2"><a href='#popup22'>500</a></td>
    <td id="row1_3"><a href='#popup23'>500</a></td>
    <td id="row1_4"><a href='#popup24'>500</a></td>
    <td id="row1_5"><a href='#popup25'>500</a></td>
  </tr>
</table>
<table id="score">
<tr><td><div id="result"></div></td><td><button onclick="clickCounter()" type="button">-100!</button><button onclick="clickCounterr()" type="button">+100!</button></td></tr>
<tr><td><div id="resultt"></div></td><td><button onclick="clickCounterrrr()" type="button">+100!</button><button onclick="clickCounterrr()" type="button">-100!</button></td></tr>


</div>



<?php

$questions = array(
  "cat1100" => ["This HTTP status code returns: Not Found", " 404"],
  "cat2100" => ["This HTTP status code returns: Internal Server Error", " 500"],
  "cat3100" => ["This HTTP status code returns: Forbidden", "403"],
  "cat4100" => ["This HTTP status code returns: OK", "What is 200"],
  "cat5100" => ["This HTTP status code returns: HTTP Status Not Found", "404"],

  "cat1200" => ["HTML stands for this language", " Hypertext Markup Language"],
  "cat2200" => ["The color white's HTML hex code", " #FFFFFF"],
  "cat3200" => ["<ol> defines what", "What is an ordered list"],
  "cat4200" => ["The largest, most important heading", "h1"],
  "cat5200" => ["Cells can span many columns with this HTML attribute", " colspan"],

  "cat1300" => ["CSS stands for this", " Cascading Style Sheets"],
  "cat2300" => ["This property changes the font of an element", "font-family"],
  "cat3300" => ["Class selectors start with", "What is a period"],
  "cat4300" => ["This property creates can make text bold ", "font-weight"],
  "cat5300" => ["This property generates space around an element's content inside any defined borders", "padding"],

  "cat1400" => ["PHP stands for", "What is Hypertext Preprocessor"],
  "cat2400" => ["Variables in PHP start with this symbol", "sign"],
  "cat3400" => ["Other than print, this output statement displays text in PHP", "echo"],
  "cat4400" => ["This function returns the length of a string", " strlen()"],
  "cat5400" => ["PHP originally stood for", "What is Personal Home Page"],

  "cat1500" => ["The name of the server used in this class", "It is CODD"],
  "cat2500" => ["Project 1 will take place on this day", "Novemver 1st "],
  "cat3500" => ["The official time our class ends", " 7:15pm"],
  "cat4500" => ["The room number of where our class meets", "it is Langdale Hall R200"],
  "cat5500" => ["Our TA's last name", "Reddy Mannem"],
);
?>

<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
      <?php
        echo $questions["cat1100"][0] ."<br>" . "<br>";
      ?>
      <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1100"][1];
        ?>
      </div>
    </div>
  </div>
</div>

<div id="popup2" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup3" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup4" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup5" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup6" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup7" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup8" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup9" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup10" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup11" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup12" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup13" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup14" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup15" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup16" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup17" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup18" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup19" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup20" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup21" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup22" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup23" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup24" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup25" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<form action="login.php" method="post">
  <input type="submit" value="Logout">
</form>

</body>
</html>