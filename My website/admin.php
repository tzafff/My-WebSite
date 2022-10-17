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
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style2.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Αρχική</title>
</head>

<body>

<div class="container">
<header> 

<a href="admin.php"> <img src="Εργασία 1/media/java1.png" align="center" style="color:white"></a> <h1>JAVA </h1>
<div class="logo">
<!--<h1> <a href="index.html" style="color:white"> JAVA</a> </h1>-->

 </header>

<nav> 
<ul>
	<li class="selected"> <a href="admin.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main style="height:500px"> 
<h2> Καλωσήλθατε Διαχειριστή <?php echo $_SESSION['username']?></h2>
<br>
<p> Ως Διαχειριστής της ιστοσελίδας θα βρείς εκτεταμένες πληροφορίες και δίαφορα  <a href="more2.php">"τιπς"</a> τα οποία θα σε βοηθήσουν αρκέτα&nbspγια την αντικειμενοστρεφή λογική πέρα απο την γλώσσα προγραμματισμού&nbsp"JAVA". 
Επιπλέον θα έχεις την δυνατότητα να απαντήσεις και να δείς  <a href="quiz2.php">quiz</a> 3ων επιπέδων ("easy", "medium" "hard") και να ανατρέξεις στο ιστορικό των αποτελεσματων σου.
</p>

<p>
Επίσης ο οποιοσδήποτε εγγεγραμμένος χρήστης έχει την δυνατότητα να στείλει μια ερώτηση η οποία μπορεί να γίνει αποδεκτή και να καταχωρηθεί στο αποθετήριο ερωτήσεων του SupperApp 
εμπλουτίζοντας και ανανεώνοντας το υλικό και τα quiz αυτής της εφαρμογής. 
</p>

<br><br>
<h3 style="text-align:left"> Οι Aρμοδιότητες του Διαχειριστή</h3>
<ul>
	<li align="left"><p>H επίβλεψη της ιστοσελίδας και η ανάθεση ρόλων των χρήστων <a href="change_role.php">Αλλαγή Ρόλου</a></p></li>
	<li align="left"><p>αλλα και η <a href="delete_user.php">Διαγραφή Χρηστών </a> η οποία θα πρέπει να γίνεται με μεγάλη προσοχη!!!</p></li>
</ul></section>


</main>

<aside style="margin:30px" >

<table border="2px" bordercolor="#6A6A6A">
<caption><h2 style="text-align:left">Το προφίλ μου</h2></caption>
<tr align="center"><td width="40%"><h2 style="padding-top:10px"><?php echo $_SESSION['username']?></h2><a href="myprofile.php"> <img  align="center" width="80px"src="Εργασία 1/media/profile.png"  class="myprofile"></a></td></tr>
<tr align="center"><td><p><a href="moderatorApp.php">Αποθετήριο Ερωτήσεων Συντονιστή</a></p></td></tr>
<tr align="center"><td><p><a href="repository.php">Αποθετήριο Γενικών Ερωτήσεων QUIZ</a></p></td></tr>
<tr align="center"><td><p><a href="history.php">Προβολή Ιστορικού</a></p></td></tr>
<tr align="center"><td><p><a href="create_question.php">Δημιουργία Ερώτησης</a></p></td></tr>
<tr align="center"><td><p><a href="change_role.php">Αλλαγή Ρόλου Χρήστη</a></p></td></tr>
<tr align="center"><td><p><a href="delete_user.php">Διαγραφή Εγγεραμμένου Χρήστη</a></p></td></tr>
<tr align="center"><td><p><a href="myprofile.php">Επεξεργασία Λογαριασμού</a></p></td></tr>

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
