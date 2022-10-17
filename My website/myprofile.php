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
<script src="Εργασία 1/scripts/checkForm.js"></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="Εργασία 1/styles/style1.css" />
<title>Ο Λογαριασμός μου</title>
</head>

<body>
<div class="container">
<header> 
<a href="index2.php"> <img src="Εργασία 1/media/java1.png" align="center" style="color:white"></a> <h1>JAVA </h1>

<div class="logo">
<!--<h1> <a href="index.html" style="color:white"> JAVA</a> </h1>-->

 </header>

<nav> 
<ul>
	<li> <a href="index2.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main> <h2> Επεξεργασία Λογαριασμού </h2>
<form  onsubmit="check()" name="sign" method="post" action="myprofile2.php" enctype="multipart/form-data">

<br>

<p> Όνομα: <br>
<input type="text" name="fname" size="30" maxlength="30"  style="width:80%" > <br>
</p>

<p> Επίθετο: <br>
<input type="text" name="lname" size="30" maxlength="30"  style="width:80%"> <br>
</p>
 
<p> Ημερομηνία γέννησης: <br>
<input type="date" name="birth"> <br>
</p>

<p> Φύλο: <br>
Άνδρας <input type="radio" name="gender" value="Άνδρας">&nbsp;&nbsp;&nbsp;&nbsp; Γυναίκα <input type="radio" name="gender" value="Γυναίκα">
</p>

<p> Password: <br>
<input type="password" name="password" size="30" maxlength="30" style="width:80%"> <br>
</p>

<p> Confirm-Password: <br>
<input type="password" name="conf_password" size="30" maxlength="30" style="width:80%"> <br>
</p>

<p> Email: <br>
<input type="email" name="email" size="30" maxlength="30" style="width:80%"> <br>
</p>

<p> Φωτογραφία: <br>
<input type="file" name="myfile"> <br>
</p>
<br><br>

<p>Όροι Αποδοχής<input type="checkbox" name="terms" id="terms" value="Αποδοχή" onclick="check()"> </p>

<br>
<p> <input type="submit" name="submit_data" value="Αποστολή" style="width:40%">
</p>
</form>

<script>
function check()
{
	psw=document.sign.password.value;
	//alert(psw);
	
	conpsw=document.sign.conf_password.value;
	//alert(conpsw);
	
		
	if(psw!=conpsw)
	{
		alert("Not same confirm-password");	
		document.sign.password.value="";
		conpsw=document.sign.conf_password.value="";
	}
}
</script>


</main>
<aside>  </aside>
<section> 
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>

</html>