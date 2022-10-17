<?php
session_start();

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sign_up");
	$usr=$_SESSION['username'];
	$psw=$_SESSION['password'];
	$result=mysqli_query($con,"select * from newusers where Username='".$usr."' and Password='".$psw."' limit 1");
			
	if(mysqli_num_rows($result)==1)
	{
				
		//ADMIN//
		$result3=mysqli_query($con,"select Role from newusers where Username='".$usr."' and Password='".$psw."' and Role='3'");
		if(mysqli_num_rows($result3)==1)
		{
			header ("location: admin.php");
		}
				
		//MODERATOR//
		$result2=mysqli_query($con,"select Role from newusers where Username='".$usr."' and Password='".$psw."' and Role='2'");
		if(mysqli_num_rows($result2)==1)
		{
			
			header ("location: moderator.php");
		}
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
	<li class="selected"> <a href="index2.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main style="height:500px"> 
<h2> Καλωσήλθατε <?php echo $_SESSION['username']?></h2>
<br>
<p> Ως εγγεγραμμένος χρήστης εδώ θα βρείς εκτεταμένες πληροφορίες και δίαφορα  <a href="more2.php">"τιπς"</a> τα οποία θα σε βοηθήσουν αρκέτα&nbspγια την αντικειμενοστρεφή λογική πέρα απο την γλώσσα προγραμματισμού&nbsp"JAVA". 
Επιπλέον θα έχεις την δυνατότητα να απαντήσεις και να δείς  <a href="quiz2.php">quiz</a> 3ων επιπέδων ("easy", "medium" "hard") και να ανατρέξεις στο ιστορικό των αποτελεσματων σου.
</p>

<p>
Επίσης ο οποιοσδήποτε εγγεγραμμένος χρήστης έχει την δυνατότητα να στείλει μια ερώτηση η οποία μπορεί να γίνει αποδεκτή και να καταχωρηθεί στο αποθετήριο ερωτήσεων του SupperApp 
εμπλουτίζοντας και ανανεώνοντας το υλικό και τα quiz αυτής της εφαρμογής. 
</p>



</main>
<aside style="margin:30px" >

<table border="2px" bordercolor="#6A6A6A">
<caption><h2 style="text-align:left">Το προφίλ μου</h2></caption>
<tr align="center"><td width="40%"><h2 style="padding-top:10px"><?php echo $_SESSION['username']?></h2><a href="myprofile.php"> <img  align="center" width="80px"src="Εργασία 1/media/profile.png"  class="myprofile"></a></td></tr>
<tr align="center"><td><p><a href="myprofile.php">Επεξεργασία Λογαριασμού</a></p></td></tr>
<tr align="center"><td><p><a href="history.php">Προβολή Ιστορικού</a></p></td></tr>
<tr align="center"><td><p><a href="create_question.php">Δημιουργία Ερώτησης</a></p></td></tr>
</table>
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


