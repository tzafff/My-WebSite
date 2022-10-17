<?php 
session_start();

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}
?>

<?php 

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sign_up");
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	echo "useranem " .$username;echo "<br>";
	
	$choice =$_POST['choice'];echo "<br>";
	echo " choice: " .$choice; echo "<br>";
	
	mysqli_query($con,"UPDATE newusers SET Role='$choice' where Username='$username'");
	header("location: change_role.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style2.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Αρχική</title>
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


<main> 
</main>

<aside style="margin:30px" >
</aside>
<section> 
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>
</html>
