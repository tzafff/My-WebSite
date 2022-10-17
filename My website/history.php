<?php 

session_start();
$con = mysqli_connect("localhost","root","");
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style.css"/>
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

	<h2><?php echo $_SESSION['username']?>'s History </h2><br>
<?php


	$user=$_SESSION['username']; 
	//echo $user;echo"<br>";
	
	mysqli_select_db($con,"sign_up");
	$result=mysqli_query($con,"SELECT Level,Score,DATE FROM results WHERE Usr='$user'");
	$row = mysqli_fetch_array($result);
	while ($row)
	{
		echo " Level:" .$row['Level'];
		echo " Score:" .$row['Score']; 
		echo " DATE:" .$row['DATE']; echo " <br> ";
		$row = mysqli_fetch_array($result);
		echo "<br>";
	}
?>
<br><br><br> <a href="index2.php" align="center"> Επιστροφή στην αρχική σελίδα </a>	

</main>
<aside>
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