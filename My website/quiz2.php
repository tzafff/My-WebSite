<?php
session_start();

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}
?>
<!DOCTYPE html>
<html>

<head>
<script src="Εργασία 1/scripts/results.js"></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="Εργασία 1/styles/style1.css" />
<title>Quiz</title>
</head>

<body>
<div class="container">
<header> 
<a href="index2.php"> <img src="Εργασία 1/media/java1.png" align="center" style="color:white"></a> <h1>JAVA </h1>

<!--<div class="logo">
<h1> <a href="index.html" style="color:white"> JAVA</a> </h1>-->

 </header>

<nav> 
<ul>
	<li> <a href="index2.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li class="selected"> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main style="height:1200px" align="center">




<script>
function displayQuiz(str) {
if (str == "")
{
	document.getElementById("quiz").innerHTML = "";
	return;
}
else
{ 
	if(window.XMLHttpRequest) 
	{
		xmlhttp = new XMLHttpRequest ( ); 
	} // for "normal" browsers...
	else 
	{
	xmlhttp = new ActiveXObject ("Microsoft.XMLHTTP"); 
	} // for IE6, IE5
	
	xmlhttp.onreadystatechange = function() 
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById("quiz").innerHTML = xmlhttp.responseText;
		}
	}
xmlhttp.open("GET","dynamicquiz.php?userid="+str, true);

xmlhttp.send();
}
} 
</script>


<form name="form" method="post" action="checkresults.php">
<p> Γεια σου <?php echo $_SESSION['username'] ?> </p><br>
<select name="users" onchange="displayQuiz(this.value)">
<option value="">Επέλεξε επίπεδο δυσκολίας: </option>
<option value="1"> Easy </option>
<option value="2"> Medium </option>
<option value="3"> Hard </option>
</select>
</form>
<br>
<b></b><div id="quiz"></div>

</main>



<aside></aside>
<section>
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Τζαφερης Χρήστος <br>
 Επικοινωνία:<a href="mailto:tzaf097@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>

</html>