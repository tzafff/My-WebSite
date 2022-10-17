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
<meta charset="utf-8" />
<link rel="stylesheet" href="Εργασία 1/styles/style1.css" />
<title>Περισσότερα</title>
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
	<li class="selected"> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main> 

<h2>ΠΕΡΙΣΣΟΤΕΡΑ</h2>
<br><br><br>
<p>
<embed src="Εργασία 1/media/K10Java.pdf" style = "position: relative" type="application/pdf" width="80%" height="400px"/>
<br>
Για άνοιγμα του αρχείου σε άλλη σελίδα πατήστε 
<a href="Εργασία 1/media/K10Java.pdf"> εδώ </a>          
</p>

<br><br><br><br><br>

<video width="80%" height="400px" controls>
<source src="Εργασία 1/media/JavaInheritance.mp4" type="video/mp4">
</video>
<p>Ένα απλό παράδειγμα με υλοποιήση κλάσεων για την κληρονομικότητα </p>



<br><br>



</main>
<aside> </aside>
<section>
<p> Περισσότερες πληροφορίες θα βρείτε στο βίντεο του συνδέσμου:
<a href="https://www.youtube.com/watch?v=nixQyPIAnOQ&ab_channel=edureka%21"> https://www.youtube.com/watch?v=nixQyPIAnOQ&ab_channel=edureka%21</a> 
</p>
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>

</html>