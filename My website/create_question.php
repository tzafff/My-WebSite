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
<script src="Εργασία 1/scripts/checkForm.js"></script>

<meta charset="utf-8" />
<link rel="stylesheet" href="Εργασία 1/styles/style1.css" />
<title>Δημιουργία Ερώτησης</title>
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


<main> <h2> Δημιουργία Ερώτησης </h2>
<form name="create" method="post" action="send_questions.php" enctype="multipart/form-data">

<br>
<div id="survey_options">
<p> Εκφώνηση Ερώτησης: <br>
<textarea name= "question" rows=7 cols=50 ></textarea>
<!--<input type="text" name="question" size="50" maxlength="30"  style="height:100px" > <br>-->
</p>
<br><br>

<select name="qtype">
<option>Επέλεξε τύπο ερώτησης: </option>
<option value="1">Σωστό/Λάθος</option>
<option value="2">Συμπλήρωσης Κενού</option>
<option value="3">Πολλαπλής Επιλογής(με 1 σωστή απάντηση)</option>
<option value="4">Πολλαπλής Επιλογής</option>
</select><br><br><br>

<p> Σωστή Απάντηση: <br>
<textarea name= "correct_answer" rows=7 cols=50 ></textarea>
<!--<input type="text" name="correct_answer" size="50" maxlength="30"  style="height:100px"> <br>-->
</p>

<p> Λάθος Απάντηση: <br>
<textarea name= "false_answer1" rows=7 cols=50 ></textarea>
<!--<input type="text" name="false_answer1" size="50" maxlength="30"  style="height:100px" placeholder=""> <br>-->
</p>
</div>
<a href="#" id="add_more_fields">Πρόσθεσε Απάντηση</a> 
<script src="Εργασία 1/scripts/morefields.js"></script><br><br><br>

<select name="level">
<option>Επέλεξε επίπεδο ερώτησης: </option>
<option value="1">Easy</option>
<option value="2">Medium</option>
<option value="3">Hard</option>
</select><br><br><br>

<br>
<p> <input type="submit" name="submit_data" value="Αποστολή" style="width:40%">
</p>
</form>

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